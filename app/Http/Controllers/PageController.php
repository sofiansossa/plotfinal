<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function alpha()
    {
        return view('audit');
    }
    public function beta() 
    {
        return view('prestations');
    }
    public function gamma()
    {
        return view('maintenance');
    }
    public function lambda()
    {
        return view('formation');
    }
}
