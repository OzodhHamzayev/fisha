<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopIndex(){
        return view('shop');
    }
    public function shopCart(){
        return view('shopping-cart');
    }
}
