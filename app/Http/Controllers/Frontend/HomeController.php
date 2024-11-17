<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function aboutUs(): View
    {
        return view('frontend.pages.about-us.index');
    }

    public function contactUs(): View
    {
        return view('frontend.pages.contact-us.index');
    }

    public function portfolio(): View
    {
        return view('frontend.pages.portfolio.index');
    }

    public function portfolioDetails(): View
    {
        return view('frontend.pages.portfolio.details');
    }

    public function webDesignAndDevelopment()
    {
        return view('frontend.pages.services.web-development');
    }

    public function graphicDesign()
    {
        return view('frontend.pages.services.graphic-design');
    }
}
