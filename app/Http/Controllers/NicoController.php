<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NicoController extends Controller
{
    // About
    public function about() {
        return view('aboutPage.about');
    }
}