<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function offer(){
        return view('pages.offer');
    }
    public function gallery(){
        return view('pages.gallery');
    }
    public function contact(){
        return view('pages.about');
    }
}
