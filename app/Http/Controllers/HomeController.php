<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(): \Illuminate\View\View{
        return view('home');
    }
}
