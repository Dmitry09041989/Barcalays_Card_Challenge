<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function register(){
        return view('auth.register') ?? '';
    }


    function post_register(Request $request){

        dd($request);
        //validation

        //save user data

        //sign in

        //redirect
    }
}
