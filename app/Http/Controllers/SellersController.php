<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SellersController extends Controller {

    /**
     * List of all sellers
     *
     * @return void
     */
    public function index() {
        $sellers = DB::select('select * from users where role="seller"');
        return view('sellers.index',compact('sellers'));
    }

    /**
     * Edit Seller
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id) {

        $seller = DB::select('select * from users where role="seller" and id=?',[$id]);

        $seller = count($seller) ? $seller[0] : null;
        return view('sellers.edit',compact('seller'));
    }

    public function create() {
        return view('sellers.create');
    }

    /**
     * Add New Seller
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {

        $request->validate([
            'email' => 'required|unique:users,email'
        ]);

        $sellerData = $request->all();
        $sellerData['role'] = 'seller';


        DB::select('
            INSERT INTO
            users (
                name,
                password,
                email,
                phone,
                role,
                address,
                created_at,
                updated_at
                )
                VALUES (?,?,?,?,?,?,?,?)
        ',[
            $sellerData['name'],
            Hash::make($sellerData['password']),
            $sellerData['email'],
            $sellerData['phone'],
            'seller',
            $sellerData['address'],
            now()->format('Y-m-d H:i:s'),
            now()->format('Y-m-d H:i:s')
        ]);


        return redirect()->route('sellers');
    }

    /**
     * Update The Seller
     *
     * @param Request $request
     * @return void
     */
    public function update($id,Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email,' . $id
        ]);

        $sellerData = $request->all();
        $sellerData['role'] = 'seller';

        DB::select('
            update
            users
            SET
            name=?,
            email=?,
            phone=?,
            address=?,
            updated_at=?

            where id=?
        ',[
            $sellerData['name'],
            $sellerData['email'],
            $sellerData['phone'],
            $sellerData['address'],
            now()->format('Y-m-d H:i:s'),
            $id
        ]);


        return redirect()->route('sellers');
    }
}
