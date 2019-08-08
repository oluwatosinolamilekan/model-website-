<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
    	return view('views.content');
    }

     public function about()
    {
    	return view('views.about');
    }
}
