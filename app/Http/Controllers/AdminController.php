<?php

namespace App\Http\Controllers;
use App\Models\AnyUser;

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
      //  dd($request->all());
      AnyUser::create([
        'email'=>$request->user_email,
        'password'=>$request->user_password,


      ]);
      return redirect()->back(); 
        }
}
