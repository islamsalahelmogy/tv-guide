<?php
namespace App\Http\Controllers;

use App\Traits\FileTrait;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller {

    use FileTrait;

    /**
     * List of all categories
     *
     * @return void
     */
    public function index() {
        $products = DB::select('select * from products where seller_id=?',[auth()->user()->id]);
        return view('products.index',compact('products'));
    }

    public function create() {

        $categories =  DB::select('select * from categories');
        $brands =  DB::select('select * from brands');

        return view('products.create',compact('categories','brands'));
    }

    public function edit($id) {
        $product = DB::select('select * from products where id=?',[$id]);
        $product = count($product) ? $product[0] : null;

        $categories =  DB::select('select * from categories');
        $brands =  DB::select('select * from brands');
        return view('products.edit',compact('product','categories','brands'));
    }

    /**
     * Store Product
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {
         
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);


        try {
            $product_image = FileTrait::uploadFile($request['image'],'assets/images');
        } catch(\Exception $e) {
            $e->getMessage();
        }

        DB::select('
            INSERT INTO
            products (
                name,
                description,
                category_id,
                brand_id,
                price,
                image,
                quantity,
                seller_id,
                created_at,
                updated_at
                )
                VALUES (?,?,?,?,?,?,?,?,?,?)
        ',[
            $request['name'],
            $request['description'],
            $request['category_id'],
            $request['brand_id'],
            $request['price'],
            $product_image,
            $request['quantity'],
            auth()->user()->id,
            now()->format('Y-m-d H:i:s'),
            now()->format('Y-m-d H:i:s')
        ]);


        return redirect()->route('products');
    }

    /**
     * Update the product
     *
     * @param [type] $id
     * @param Request $request
     * @return void
     */
    public function update($id,Request $request) {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);


        if($request['image']) {
            try {
                $product_image = FileTrait::uploadFile($request['image'],'assets/images');
            } catch(\Exception $e) {
            }
        } else {
            $product =  DB::select('select * from products where id=?', [$id]);
            $product_image = $product[0]->image ?? '';
        }

        $request->validate([
            'name' => 'required|unique:brands,name'
        ]);
        DB::select('
            UPDATE
            products SET
                name=?,
                description=?,
                category_id=?,
                brand_id=?,
                price=?,
                image=?,
                quantity=?,
                updated_at=?
            where id=?
        ',[
            $request['name'],
            $request['description'],
            $request['category_id'],
            $request['brand_id'],
            $request['price'],
            $product_image,
            $request['quantity'],
            now()->format('Y-m-d H:i:s'),
            $id
        ]);

        return redirect()->route('products');
    }
}
