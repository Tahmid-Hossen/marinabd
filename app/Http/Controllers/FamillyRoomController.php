<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamillyRoomController extends Controller
{
   public function familly() {
        return view('familly.familly');
      }
}
