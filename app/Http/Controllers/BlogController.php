<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogIndex(){
        return view('blog');
    }
    public function blogDetailes(){
        return view('blog_detailes');
    }
    public function product(){
        return view('product');
    }
}
