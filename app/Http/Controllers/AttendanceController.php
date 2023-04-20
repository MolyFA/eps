<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function start()
    {

        $attendances=Attendance::whereDate('date',today())->get();
        // dd($attendances);
        return view('backend.pages.attendance.list',compact('attendances'));
    }


    public function checkAttendance()
    { 
        $employee = Employee::where("user_id",auth()->user()->id)->first();
        $check=Attendance::whereDate('date',now()->toDateString())->where('employee_id',$employee->id)->first();
        if(!$check)
        {
            Attendance::create([
                'employee_id'=>$employee->id,
                'checkin_time'=> now(),
                "status" =>date('H:i:s') < date('h:i:s',strtotime('10:00:00'))?'present':'late entry' ,
                'date'=>now()
           ]);

        notify()->success('Check in success');
        return redirect()->back();
        }
        notify()->error('Already Checked in');
        return redirect()->back();
        

    }


public function checkoutAttendance()
{
    $employee = Employee::where("user_id",auth()->user()->id)->first();
    $todayData = Attendance::where('employee_id',$employee->id)->whereDate('created_at',now())->first();

    if($todayData)
    {
        if($todayData->checkout_time == null){
            $todayData->update([
                'checkout_time'=>now(),
            ]);
            
            notify()->success("Check Out Success");
            return redirect()->route('attendance');
        }


    }else{
        
    notify()->error("You Didn't CheckOut");
    return redirect()->route('attendance');
    }


    notify()->error("Already Check Out");
    return redirect()->route('attendance');


}

}
