<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.sign_in_page');
    }

    public function authenticated(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ]);


        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('status', 'Invalid email or password');
        }

        return redirect()->route('dashboard');

    }
}
