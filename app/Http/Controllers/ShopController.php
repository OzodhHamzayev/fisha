<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Comment;
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
        $shop = Shop::query()->with(['category','tags', 'comments', 'user'])->find($id);
        if($shop == null){
            return redirect()->route('shop.index');
        }
        // dd($shop->toArray());
        return view('product', ['product' => $shop]);
    }
    public function shopTags(int $id){
        $shopTags = Tag::query()->with('shops')->find($id);
        if($shopTags == null){
            return redirect()->back();
        }
        return view('shop-tags', ['shopTags'=> $shopTags]);
    }

}
