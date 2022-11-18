<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list()
    {


      $user_list=Admin::paginate(5);
       //$user_list=Admin::all();
        
        //dd($user_list);
        return view('backend.pages.admin.list',compact('user_list'));
    }



    public function createForm()
    {
       
        return view('backend.pages.admin.create');
    }
    public function createEmployee(Request $request)
    {
       
      //dd($request->all());
      //dd(date('Y-m-d H:i:s'));
      $request->validate([
        'user_email'=>'required|unique:admin,email',//after unique database table name and column name
        'image'=>'required'
 
      ]);
          
      $fileName=null;
      if($request->hasFile('image'))

      {

         //generate name
         $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
         $request->file('image')->storeAs('/uploads',$fileName);

      }
      //dd($fileName);
      






        //dd($request->all());
       Admin::create([
        
        'name'=>$request->user_name,
        'email'=>$request->user_email,
        'phone'=>$request->phone_number,
        'image'=>$fileName


      ]);
      return redirect()->back(); 
        }
}
