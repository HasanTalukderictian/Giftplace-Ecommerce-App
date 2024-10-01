<?php

namespace App\Http\Controllers\fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    //
    public function show()
    {
        return view('frontend/NavBar');
    }
}
