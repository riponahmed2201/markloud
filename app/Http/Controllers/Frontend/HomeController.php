<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('frontend.pages.about-us.index');
    }

    public function contactUs()
    {
        return view('frontend.pages.contact-us.index');
    }

    public function portfolio()
    {
        return view('frontend.pages.portfolio.index');
    }

    public function portfolioDetails()
    {
        return view('frontend.pages.portfolio.details');
    }
}
