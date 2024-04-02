<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqContoller extends Controller
{
    public function faq(){
        return view('faq');
    }
}
