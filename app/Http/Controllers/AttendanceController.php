<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function start()
    {

        $attendances=Attendance::all();
        // dd($attendances);
        return view('backend.pages.attendance.list',compact('attendances'));
    }


    public function checkAttendance()
    {        

        $todayData=Attendance::where('employee_id',auth()->user()->id)->whereDate('created_at',now())->first();
        if(empty($todayData)){
            $status = null;
            $time = Carbon::create(now())->addHours(6)->toTimeString();
            $dt = new Carbon('10:00:00');

            if($time <= $dt->toTimeString()){
                $status = "Present";
            }
            else{
                $status = "Late Entry";
            }
            Attendance::create([
                'employee_id'=>auth()->user()->id,
                'checkin_time'=>now(),
                "status" => $status,
                'date'=>now(),
           ]);



           $attendances = Attendance::all();

           return redirect()->route('attendance');

         
       }

       return redirect()->route('attendance');




    }


public function checkoutAttendance()
{

    $todayData = Attendance::where('employee_id',auth()->user()->id)->whereDate('created_at',now())
    ->first();

    if($todayData->checkout_time ==null)
    {

        $todayData->update([
            'checkout_time'=>now(),


        ]);
        

        return redirect()->route('attendance');

    }



    return redirect()->route('attendance');


}


















}
