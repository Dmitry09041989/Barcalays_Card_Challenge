<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    function register(){

//      dd(User::all());
        return view('auth.register');


    }


    public function store(Request $request){

//        dd($request->all());
            $this->validate($request, [
                'name' => ['required', 'min:3', 'max:255'],
                'surname' => ['required', 'min:3', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'password' => ['required', 'min:8', 'confirmed'],
            ]);


        //save user data
        User::create([
            'email'=>$request->email,
            'name'=>$request->name,
            'surname'=>$request->surname,
            'password'=>Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');

        //redirect
    }

    function sign_in(Request $request){
        return view('auth.sign_in_page');
    }

}
