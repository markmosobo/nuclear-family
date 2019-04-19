<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function artists(){
        return view('front.artists');
    }

    public function blog(){
        return view('front.blog');
    }

    public function signup(){
        return view('front.signup');
    }
}
