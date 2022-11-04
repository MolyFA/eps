<?php

namespace App\Http\Controllers;
use App\Models\AnyUser;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list()
    {
      
        $user_list=AnyUser::all();
        //dd($user_list);
        return view('backend.pages.admin.list',compact('user_list'));
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
