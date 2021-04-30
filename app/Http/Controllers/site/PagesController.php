<?php

namespace App\Http\Controllers\site;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
        return view('site.pages.about');
    }

    public function music (){
        return view('site.pages.music');
    }

    public function gigs (){
        return view('site.pages.gigs');
    }

    public function lessons (){
        return view('site.pages.lessons');
    }

    public function store (){
        $products = Product::orderBy('id', 'DESC')->take(10)->get();
        return view('site.pages.store', compact('products'));
    }

    public function downloads (){
        return view('site.pages.downloads');
    }

    public function contact (){
        return view('site.pages.contact');
    }
}
