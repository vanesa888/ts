<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Alert;

class loginController extends Controller
{
    
    public function postlogin (Request $request)
    {
        if (Auth::attempt($request->only('email','password'))){
            return redirect ('/home')->with('toast_success', 'Anda Berhasil Login');
 
        }
        return redirect ('/')->with('toast_error', 'email atau password Salah');
        }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }

}
