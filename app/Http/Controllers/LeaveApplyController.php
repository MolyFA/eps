<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\LeaveApply;
use Illuminate\Http\Request;

class LeaveApplyController extends Controller
{
    public function start()
    {
        $leaveapply_list=LeaveApply::all();
        //check for relationship
        // dd($leaveapply_list[0]->employee->name);
        return view('backend.pages.leaveapply.form',compact('leaveapply_list'));
    }


    public function formcreate()
    {

        $employee = Employee::all();
       
        return view('backend.pages.leaveapply.formcreate',compact('employee'));


    }

    public function store(Request $request)
    {



        //dd($request->all());

        LeaveApply::create([
            'employee_id'=>$request->employee,
            'tittle'=>$request->leaveapply_tittle,
            'letter'=>$request->leaveapply_letter,
            'leave'=>$request->leave,
            
            
            
        
        ]);
        
        
        return redirect()->route('leaveapply');




    }



    public function deleteLeaveApply(int $leaveapply_id)
    {
           $test=LeaveApply::find($leaveapply_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','leaveapply deleted successfully.');
             }else{
                 return redirect()->back()->with('error','leaveapply not found.');
             }

    
    }


    public function viewLeaveApply($leaveapply_id)
    {
      $LeaveApply=LeaveApply::find($leaveapply_id);
      return view('backend.pages.leaveapply.view',compact('leaveapply_id'));
    }



    public function editLeaveApply($leaveapply_id)
    {

     $leaveapply=LeaveApply::find($leaveapply_id);

     $leaveapply_list=LeaveApply::all();
     return view('backend.pages.leaveapply.edit',compact('leaveapply','leaveapply_list'));

    
    }





    public function updateLeaveApply(Request $request,$leaveapply_id)
    {
        $leaveapply=LeaveApply::find($leaveapply_id);  

      $leaveapply->update([

        
            'tittle'=>$request->leaveapply_tittle,
            'letter'=>$request->leaveapply_letter,
            'leave'=>$request->leave,
            
            
         ]);


     return redirect()->route('leaveapply.form')->with('message','Update success.');

        
}


























}
