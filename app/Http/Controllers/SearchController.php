<?php
namespace App\Http\Controllers;

use App\Models\Product;
use DB;
use Illuminate\Http\Request;

class SearchController extends Controller {

    /**
     * Search in all products
     *
     * @return void
     */
    public function index(Request $request) {
        $category = $request->get('category');
        $brand = $request->get('brand');
        $keyword = $request->get('keyword');

        $products = Product::with(['category','brand','seller'])
        ->when($category && $category!= '0', function ($query) use ($category) {
            return $query->where('products.category_id', $category);
        })
        ->when($brand && $brand!= '0', function ($query) use ($brand) {
            return $query->where('products.brand_id', $brand);
        })
        ->when($keyword && $keyword!= '', function ($query) use ($keyword) {
            return $query
            ->where('products.name','LIKE', "%$keyword%")
            ->orWhere('products.description','LIKE', "%$keyword%");
        })
        ->get();

        return view('front.search',compact('products','category','brand','keyword'));
    }
}
