<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
       
         return view('backend.master');
    }
    public function aboutus()
    {
        return view('backend.pages.about');
    }
    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }
}
