<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller {

    /**
     * LogIn View
     *
     * @return void
     */
    public function getLogin() {

        if(auth()->user()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    /**
     * LogIn Code
     *
     * @param Request $request
     * @return void
     */
    public function postLogin(Request $request) {

        $isLogedIn = auth()->attempt($request->only('email','password'));
        if($isLogedIn) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login.get');
    }

    /**
     * Log user out of the application
     *
     * @return void
     */
    public function logOut() {
        auth()->logout();
        return redirect()->route('login.get');
    }
}
