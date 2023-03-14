<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }


    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function pricing()
    {
        return view('front.pricing');
    }

    public function services()
    {
        return view('front.service');
    }
}
