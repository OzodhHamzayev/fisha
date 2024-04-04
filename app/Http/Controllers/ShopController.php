<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
class ShopController extends Controller
{
    public function shopIndex(){
        $shop = Shop::query()->with('category')->get();
        return view('shop', ['products'=> $shop]);
    }
    public function shopCart(){
        return view('shopping-cart');
    }
    public function productShow(int $id){
        $shop = Shop::query()->with('category')->find($id);

        return view('product', ['product' => $shop]);
    }
}
