<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('about-us', [HomeController::class, 'aboutUs']);
Route::get('contact-us', [HomeController::class, 'contactUs']);
Route::get('portfolio', [HomeController::class, 'portfolio']);
Route::get('portfolio-details', [HomeController::class, 'portfolioDetails']);
