<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index(Request $request)
    {
        return view('landing.testimoni');
    }
}
