<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\LeaveApply;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
       $employees = Employee::all()->toArray();
       $users = User::all()->toArray();
       $attendances = Attendance::all()->toArray();
       $employees_count = count($employees);
       $users_count = count($users);
       $attendances_count = count($attendances);
       $leaves_count = count(LeaveApply::where("status","pending")->get()->toArray());
       
        return view('backend.pages.dashboard',compact("employees_count","leaves_count","users_count","attendances_count"));
    }
    

    
   
}
