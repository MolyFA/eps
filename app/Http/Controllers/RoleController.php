<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function start(){

        $roles = Role::paginate(2);
        return view('backend.pages.role.list', compact('roles'));
    }
    public function create(){
        return view('backend.pages.role.create');
    }
    public function store(Request $request){
        
        $validated = $request->validate([
            'roleName' => 'required',
        ]);

        if($validated){
            Role::create([
                "name" =>$request->roleName
            ]);
        }

        return to_route("role.list");
    }



    public function deleteRole($role_id)
    {
           $test=Role::find($role_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','role deleted successfully.');
             }else{
                 return redirect()->back()->with('error','role not found.');
             }

    
    }



    public function viewRole($role_id)
    {

       $role=Role::find($role_id);
       return view('backend.pages.role.view',compact('role'));


    }




    public function editRole($role_id)
    {


       $role=Role::find($role_id);
       $role_list=Role::all();
       return view('backend.pages.role.edit',compact('role','role_list'));


    }


    public function updateRole(Request $request,$role_id)
    {

       $role=Role::find($role_id);

      
       $role->update([

        "name" =>$request->name,
       ]);


       return redirect()->route('role.list')->with('message','Update success.');

        


    }
    
        
      
        
     





}



