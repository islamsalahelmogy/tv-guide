<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index() {
        $admins = DB::select('select * from users where role="admin"');
        return view('admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'email' => 'required|unique:users,email'
        ]);

        $adminData = $request->all();
        $adminData['role'] = 'admin';


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
            $adminData['name'],
            Hash::make($adminData['password']),
            $adminData['email'],
            $adminData['phone'],
            'admin',
            $adminData['address'],
            now()->format('Y-m-d H:i:s'),
            now()->format('Y-m-d H:i:s')
        ]);


        return redirect()->route('admins');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id) {

        $admin = DB::select('select * from users where role="admin" and id=?',[$id]);
         $admin = count($admin) ? $admin[0] : null;
        return view('admins.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email,' . $id
        ]);

        $adminData = $request->all();
        $adminData['role'] = 'admin';

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
            $adminData['name'],
            $adminData['email'],
            $adminData['phone'],
            $adminData['address'],
            now()->format('Y-m-d H:i:s'),
            $id
        ]);


        return redirect()->route('admins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
