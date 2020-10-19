<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function single(){
        return view('single');
    }

    public function double(){
        return view('double');
    }

    public function tripple(){
        return view('tripple');
    }

    public function familly(){
        return view('familly');
    }
}