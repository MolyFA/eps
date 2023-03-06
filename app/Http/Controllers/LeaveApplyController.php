<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\LeaveApply;
use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveApplyController extends Controller
{
    public function start()
    {
        $leaveapply_list = LeaveApply::with('leavetype')->get();
        // dd($leaveapply_list);
        //check for relationship
        // dd($leaveapply_list[0]->employee->name);
        return view('backend.pages.leaveapply.form', compact('leaveapply_list'));
    }


    public function formcreate()
    {

        $employee = Employee::all();
        $leavetype_list = LeaveType::all();

        return view('backend.pages.leaveapply.formcreate', compact('employee', "leavetype_list"));
    }

    public function store(Request $request)
    {



        //dd($request->all());

        LeaveApply::create([
            'employee_id' => $request->employee,
            'date' => $request->leaveapply_date,
            'tittle' => $request->leaveapply_tittle,
            'letter' => $request->leaveapply_letter,
            'leavetype_id' => $request->leavetype_id,

        ]);


        return redirect()->route('leaveapply');
    }



    public function approve(int $leaveapply_id)
    {
        $test = LeaveApply::find($leaveapply_id);
        if ($test) {
            $test->update([
                "status" => "approved"
            ]);
            notify()->success("Leave Approved");
            return redirect()->back();
        } else {
            notify()->error("Something went worng");
            return redirect()->back();
        }
    }






    public function reject( int $leaveapply_id)
    {
        
        $test = LeaveApply::find($leaveapply_id);
        if ($test) {
            $test->update([
                "status" => "rejected"
            ]);
            notify()->success("Rejected");
            return redirect()->back();
        } else {
            notify()->error("Something went worng");
            return redirect()->back();
        }
        
        


    }


}
