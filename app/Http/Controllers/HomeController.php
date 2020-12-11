<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function bai2($title){
        return view('bai2.index',compact('title'));
    }

    public function bai3(){
        return view('bai3.addblog');
    }

    public function bai5(){
        return view('bai5.page.home');
    }

    public function about(){
        return view('bai5.page.about');
    }
}
