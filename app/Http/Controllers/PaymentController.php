<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function pay1()
    {
        return view('bcc_files.HPPAuthBillTo');
    }

    public function pay2()
    {
        return view('bcc_files.HPPAuthBillTo2');
    }
}
