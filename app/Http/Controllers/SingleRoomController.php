<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleRoomController extends Controller
{
    public function create(){
        return view('single.create');
    }
}
