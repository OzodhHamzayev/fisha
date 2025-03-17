<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Shop;

class ShopController extends Controller
{
    public function shopIndex(){
        $shop = Shop::query()
            ->with('categories')
            ->get();
        return view('shop', ['products'=> $shop]);
    }
    public function shopCart(){
        return view('shopping-cart');
    }
    public function productShow(int $id){
        $shop = Shop::query()->with(['tags', 'user', 'comments', 'categories'])->find($id);


        // oq futbolka -> ust kiyim, futbolka, mujskoy 

       $recomendedProducts = $shop->categories()->inRandomOrder()->first()->shops()->limit(4)->get();

        if($shop == null){
            return redirect()->route('shop.index');
        }
        return view('product', ['product' => $shop, 'recomendedProducts' => $recomendedProducts]);
    }
    public function shopTags(int $id){
        $shopTags = Tag::query()->with('shops')->find($id);
        if($shopTags == null){
            return redirect()->back();
        }
        return view('shop-tags', ['shopTags' => $shopTags]);
    }
    public function ShopCategory(int $id){
        $shopCategory = Category::query()->with('shops')->find($id);
        if($shopCategory == null){
            return redirect()->back();
        }
        // dd($shopCategory);
    return view('shopCotegory', ['shopCategory' => $shopCategory]);

    }
}
