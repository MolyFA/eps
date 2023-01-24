<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function start()
    {

        $leave_list=Leave::all();
        return view('backend.pages.leave.form',compact('leave_list'));
        
    }


    public function formcreate()
    {


        return view('backend.pages.leave.formcreate');


    }



    public function store(Request $request)
    {


        //dd($request->all());



        Leave::create([
            'name'=>$request->leave_name,
            'date'=>$request->leave_date,
            'details'=>$request->leave_details,
            'leave_type'=>$request->leave_type,
            
            
        
        ]);
        
        
        return redirect()->route('leave');


  }




  public function deleteLeave(int $leave_id)
    {
           $test=Leave::find($leave_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','leave deleted successfully.');
             }else{
                 return redirect()->back()->with('error','leave not found.');
             }

    
    }


    public function viewLeave($leave_id)
    {
      $Leave=Leave::find($leave_id);
      return view('backend.pages.leave.view',compact('leave_id'));
    }




    public function editLeave($leave_id)
    {

     $leave=Leave::find($leave_id);

     $leave_list=Leave::all();
     return view('backend.pages.leave.edit',compact('leave','leave_list'));

    
    }

  


    public function updateLeave(Request $request,$leave_id)
    {
        $leave=Leave::find($leave_id);  

      $leave->update([

        
            'name'=>$request->leave_name,
            'date'=>$request->leave_date,
            'details'=>$request->leave_details,
            'leave_type'=>$request->leave_type,
         ]);


     return redirect()->route('leave.form')->with('message','Update success.');

        
}






}
