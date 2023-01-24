<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{
    public function start()
    {

        $leavetype_list=LeaveType::all();
        return view('backend.pages.leavetype.form',compact('leavetype_list'));
    }

    public function formcreate()
    {


        return view('backend.pages.leavetype.formcreate');


    }


    public function store(Request $request)
    {


        //dd($request->all());



        LeaveType::create([
            'id'=>$request->user_id,
            'tittle'=>$request->tittle,
            
        
        ]);
        
        
        return redirect()->route('leavetype');


  }


  public function deleteLeaveType(int $leavetype_id)
    {
           $test=LeaveType::find($leavetype_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','leavetype deleted successfully.');
             }else{
                 return redirect()->back()->with('error','leavetype not found.');
             }

    
    }



    public function viewLeaveType($leavetype_id)
    {
      $LeaveType=LeaveType::find($leavetype_id);
      return view('backend.pages.leavetype.view',compact('leavetype_id'));
    }



    public function editLeaveType($leavetype_id)
    {

     $leavetype=LeaveType::find($leavetype_id);

     $leavetype_list=LeaveType::all();
     return view('backend.pages.leavetype.edit',compact('leavetype','leavetype_list'));

    
    }



    public function updateLeaveType(Request $request,$leavetype_id)
    {
        $leavetype=LeaveType::find($leavetype_id);  

      $leavetype->update([

        
        'tittle'=>$request->tittle,
        
         ]);


     return redirect()->route('leavetype.form')->with('message','Update success.');

        
}













}



