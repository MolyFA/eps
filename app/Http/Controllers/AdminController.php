<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list()
    {
        return view('backend.pages.admin.list');
    }
    public function createForm()
    {
       
        return view('backend.pages.admin.create');
    }
}
