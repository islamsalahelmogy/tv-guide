<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller {

    /**
     * All Products
     */
    public function index() {
        $categories = Category::with('products','products.brand','products.seller')->get();
        return view('front.index',compact('categories'));
    }

    /**
     * Single Product Page
     */
    public function singleProduct($id) {
        // get all info of particular product with it's seller and brand and category
        $product = Product::with('seller','category','brand')->where('id',$id)->first();
        return view('front.single',compact('product'));
    }
}
