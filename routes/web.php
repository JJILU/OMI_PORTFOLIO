<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('portfolio.index');
})->name('portfolio.index');


Route::get("/contact", [MailController::class, 'contact'])->name('email.showContact');
Route::post("/contact", [MailController::class, 'send'])->name('email.contact');