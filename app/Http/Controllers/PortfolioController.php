<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio() {
        return view('portfolio.portfolio');
    } 

    public function portfolioDetails() {
        return view('portfolio.portfolio-details');
    }

    public function about() {
        return view('portfolio.about');
    }

    public function serivces() {
        return view('portfolio.services');
    }

    public function resume() {
        return view('portfolio.resume');
    }
}
