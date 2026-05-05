<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('portfolio.index');
})->name('portfolio.index');


Route::get("/contact", [MailController::class, 'contact'])->name('email.showContact');
Route::post("/contact", [MailController::class, 'send'])->name('email.contact');


Route::get("/about", [PortfolioController::class,'about'])->name('portfolio.about');
Route::get("/portfolio", [PortfolioController::class,'portfolio'])->name('portfolio.portfolio');
Route::get("/services", [PortfolioController::class,'serivces'])->name('portfolio.services');
Route::get("/resume", [PortfolioController::class,'resume'])->name('portfolio.resume');