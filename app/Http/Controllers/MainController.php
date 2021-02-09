<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        $services = Service::get();
        return view('services',
        ['services'=>$services]
        );
    }

    public function products(){
        return view('products');
    }

    public function book(){
        return view('booking');
    }
}
