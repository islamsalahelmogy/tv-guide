<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CategoriesController extends Controller {

    /**
     * List of all categories
     *
     * @return void
     */
    public function index() {
        $categories = DB::select('select * from categories');
        return view('categories.index',compact('categories'));
    }


    public function create() {
        return view('categories.create');
    }

    public function edit($id) {
        $category = DB::select('select * from categories where id=?',[$id]);
        $category = count($category) ? $category[0] : null;

        return view('categories.edit',compact('category'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:categories,name'
        ]);
        DB::select('
            INSERT INTO
            categories (
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


        return redirect()->route('categories');
    }

    public function update($id,Request $request) {

        $request->validate([
            'name' => 'required|unique:categories,name,'. $id
        ]);

        DB::select('
            update
            categories
            SET
            name=?,
            updated_at=?
            where id=?
        ',[
            $request['name'],
            now()->format('Y-m-d H:i:s'),
            $id
        ]);

        return redirect()->route('categories');
    }
}
