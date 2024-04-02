<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckContoller extends Controller
{
    public function checkout(){
        return view('check_out');
    }
}
