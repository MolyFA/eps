<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function start(){

  
    $users = User::with("role")->paginate(5);

    
    return view("backend.pages.user.list",compact("users"));
  }



  public function create(){

    $roles = Role::all();
    return view("backend.pages.user.create",compact("roles"));
  }

  public function store(Request $request){
    
    $request->validate([
      "name" => "required|string",
      "role_id" => "required",
      "userEmail" => "required|email",
      "userPass" => "required"

    ]);

    User::create([
      "name" =>$request->name,
      "role_id" =>$request->role_id,
      "email" =>$request->userEmail,
      "password" =>bcrypt($request->userPass),
    ]);

    return to_route("user.list");
  }



public function deleteUser($user_id) {

  $test = User::find($user_id);
      
       if($test)
       {
             $test->delete();
             return redirect()->back()->with('message','user deleted successfully');
       }
       else{
        return redirect()->back()->with('error','user not found');
       }
       

  


}

public function viewUser($user_id)
{
  $user=User::find('$user_id');
  return view('backend.pages.user.view',compact('user'));
 
}

  







    public function login()
    {

        return view('backend.pages.login');
    }

    public function dologin(Request $request)
    {
       $credentials=$request->except('_token');


     if (Auth::attempt($credentials))
     {
        return redirect()->route('dashboard');
     }
     else {

      return redirect()->back();
     }
     
    }


   


    public function logout()
    {
      Auth::logout();
      return redirect()->back()->with('message','logout successful.'); 
    }







}


