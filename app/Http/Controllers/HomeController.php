<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

     public function room() {
         return view('room');
     }
     public function single() {
         return view('blog.singlea');
     }

     public function double() {
         return view('blog.doublea');
     }

     public function tripple() {
         return view('blog.tripplea');
     }
}
