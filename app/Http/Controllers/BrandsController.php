<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class BrandsController extends Controller {

    /**
     * List of all brands
     *
     * @return void
     */
    public function index() {
        $brands = DB::select('select * from brands');
        return view('brands.index',compact('brands'));
    }

    public function create() {
        return view('brands.create');
    }

    public function edit($id) {
        $brand = DB::select('select * from brands where id=?',[$id]);
        $brand = count($brand) ? $brand[0] : null;

        return view('brands.edit',compact('brand'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:brands,name'
        ]);
        DB::select('
            INSERT INTO
            brands (
                name,
                created_at,
                updated_at
                )
                VALUES (?,?,?)
        ',[
            $request['name'],
            now()->format('Y-m-d H:i:s'),
            now()->format('Y-m-d H:i:s')
        ]);


        return redirect()->route('brands');
    }

    public function update($id,Request $request) {

        $request->validate([
            'name' => 'required|unique:brands,name,'. $id
        ]);

        DB::select('
            update
            brands
            SET
            name=?,
            updated_at=?
            where id=?
        ',[
            $request['name'],
            now()->format('Y-m-d H:i:s'),
            $id
        ]);

        return redirect()->route('brands');
    }
}
