<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function field()
    {
      
      //$employee_list=Employee::all();
      
      //dd($employee_list);

      $employee_list=Employee::paginate(5);
       

        return view('backend.pages.employee.form',compact('employee_list'));
    }
    public function formcreate()
    {
        return view('backend.pages.employee.formcreate');
    }
    public function store(Request $request)
    {
    //dd($request->all());

    $request->validate([
        'user_name'=>'required|unique:employees,name',
        
    ]);

       
    
    $fileName=null;
    if($request->hasFile('image'))
    {
     //generate name
     $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
     $request->file('image')->storeAs('/uploads',$fileName);
    }
    //dd($fileName);
   
    



        Employee::create([
        'name'=>$request->user_name,
        'email'=>$request->user_email,
        'phone'=>$request->user_phone,
        'image'=>$fileName,
        
        
       ]);

       return redirect()->back();
    }

    public function deleteEmployee(int $employee_id)
    {
           $test=Employee::find($employee_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','product deleted successfully.');
             }else{
                 return redirect()->back()->with('error','product not found.');
             }

    


    }
    
    public function viewEmployee($employee_id)
    {
      $employee=Employee::find($employee_id);
      return view('backend.pages.employee.view',compact('employee_id'));
    }



    public function editEmployee($employee_id)
    {

     $employee=Employee::find($employee_id);

     $employee_list=Employee::all();
     return view('backend.pages.employee.edit',compact('employee','employee_list'));

    }
   

    public function updateEmployee(Request $request,$employee_id)
    {
        $employee=Employee::find($employee_id);  

      $employee->update([

        'name'=>$request->user_name,
        'email'=>$request->user_email,
        'phone'=>$request->user_phone,
        


         ]);


     return redirect()->route('employee.form')->with('message','Update success.');

        




 }









}

