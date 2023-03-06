<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function start()
    {        
        $users = User::all();
        $attendance=Attendance::all();
       return view('backend.pages.report.list',compact("attendance","users")); 
    }
    public function search(Request $request){
        
        $validator = Validator::make($request->all(), [
            'from_date'    => 'required|date',
            'to_date'      => 'required|date|after:from_date',
        ]);

        if($validator->fails())
        {
//            notify()->error($validator->getMessageBag());
            notify()->error('From date and to date required and to should greater then from date.');
            return redirect()->back();
        }



       $from=$request->from_date;
       $to = $request->to_date ;


//       $status=$request->status;

$users = User::all();
        $attendance=Attendance::whereBetween('created_at', [$from, $to])->where("employee_id",$request->user_id)->get();
       return view('backend.pages.report.list',compact("attendance","users")); 
    }
}
