<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller


{

public function start()
{

    //$department_list=Department::all();
    //dd($department_list);

    $department_list=Department::paginate(5);

    return view('backend.pages.department.form',compact('department_list'));
}

public function formcreate()
{

  return view('backend.pages.department.formcreate');

}

public function store(Request $request)
{

  //dd($request->all());

  Department::create([
    'name'=>$request->name
]);


return redirect()->route('department');

  
}



public function deleteDepartment(int $department_id)
    {
           $test=Department::find($department_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','department deleted successfully.');
             }else{
                 return redirect()->back()->with('error','department not found.');
             }

    
    }

    public function viewDepartment($department_id)
    {
      $department=Department::find($department_id);
      return view('backend.pages.department.view',compact('department_id'));
    }




    public function editDepartment($department_id)
    {

     $department=Department::find($department_id);

     $department_list=Department::all();
     return view('backend.pages.department.edit',compact('department','department_list'));

    }
   



    public function updateDepartment(Request $request,$department_id)
    {
        $department=Department::find($department_id);  

      $department->update([
        'name'=>$request->user_name,
        'status'=>$request->status,
         ]);


         return redirect()->route('department')->with('message','Update success.');

        
}







}
