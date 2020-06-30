<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function reg(){
        return view('register');
    }

    public function sayName(Request $request){
        $nama = $request->input('f_name');
        return view('welcome', compact('nama'));
    }
}
