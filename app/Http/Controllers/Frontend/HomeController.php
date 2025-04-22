<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function newArrivals()
    {
        return view('frontend.new_aravel.aravel');
    }
    public function hotDels()
    {
        return view('frontend.hot-dels.index');
    }
    public function trending()
    {
        return view('frontend.trending.index');
    }
    public function about()
    {
        return view('frontend.about.index');
    }
    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function category()
    {
        return view('frontend.categoty.index');
    }
    public function card()
    {
        return view('frontend.card.index');
    }
}
