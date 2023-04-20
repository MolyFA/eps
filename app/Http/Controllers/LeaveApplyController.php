<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\LeaveApply;
use App\Models\LeaveType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeaveApplyController extends Controller
{
    public function start()
    {
         
        $leaveapply_list = LeaveApply::with('leavetype')->paginate(5);
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


        $request->validate([

            'employee'=>'required',
            'leaveapply_date'=>'required',
            'leaveapply_tittle'=>'required',
            'leaveapply_letter'=>'required',

        ]);


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






    public function reject(int $leaveapply_id)
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



    public function report()
    {
        $startDate = Carbon::now();
        $firstDay = $startDate->firstOfMonth()->toDateString();
        $lastDay = $startDate->endOfMonth()->toDateString();
        
        $leave=LeaveApply::whereBetween("updated_at",[$firstDay,$lastDay])->where("status","approved");
        
        $emp_ids = $leave->pluck("employee_id")->toArray();
        $unique_emp = array_unique($emp_ids);
        $unique_leave = collect([]);
        foreach($unique_emp as $key=>$id){
            $leave=LeaveApply::whereBetween("updated_at",[$firstDay,$lastDay])->where("status","approved");
            $countLeave = $leave->where("employee_id",$id)->get();
            $count = count($countLeave);
            $countLeave[0]->count = $count;
            $data = $countLeave[0];
            $unique_leave->push($data);
        }

        return view('backend.pages.leaveapply.reportlist',compact("unique_leave"));
    }
}
