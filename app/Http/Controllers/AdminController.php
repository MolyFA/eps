<?php

namespace App\Http\Controllers;
use App\Models\Anyuser;

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
    public function createEmployee(Request $request)
    {
    //    dd($request->all());
      Anyuser::create([
        'email'=>$request->user_name,
        'password'=>$request->user_password,


      ]);
    }
}
