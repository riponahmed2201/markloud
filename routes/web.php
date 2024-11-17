<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('about-us', [HomeController::class, 'aboutUs']);
Route::get('contact-us', [HomeController::class, 'contactUs']);
Route::get('portfolio', [HomeController::class, 'portfolio']);
Route::get('portfolio-details', [HomeController::class, 'portfolioDetails']);

//Services
Route::group(['prefix' => 'services/', 'as' => 'service.'], function () {
    Route::get('website-design-and-development', [HomeController::class, 'webDesignAndDevelopment'])->name('webDevelopment');
    Route::get('graphic-design', [HomeController::class, 'graphicDesign'])->name('graphicDesign');
    Route::get('ppc-email-sms-marketing', [HomeController::class, 'ppcEmailSmsMarketing'])->name('ppcEmailSmsMarketing');
});



//Admin Routes
Route::get('/dashboard', [DashboardController::class, 'index']);
