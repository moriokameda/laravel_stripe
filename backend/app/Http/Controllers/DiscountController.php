<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    //
    public function index() {
        $this->middleware('auth');
        return view('member.discounts');
    }

    public function __construct()
    {
        $this->middleware('auth');
//        $this->index();
    }
}
