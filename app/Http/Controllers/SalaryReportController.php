<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\MonthlySalary;
use App\Models\Salary;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SalaryReportController extends Controller
{
    public function report()
    {
      
      $employees = Employee::with("user")->with("salary")->with("department")->with("designation")->get();

      //dd($employees);

      $startDate = Carbon::now();
      $firstDay = $startDate->firstOfMonth()->toDateString();
      $lastDay = $startDate->endofMonth()->toDateString();
      //dd($firstDay->toDateString());
      $salary = Salary::whereBetween("updated_at",[$firstDay, $lastDay])->get();
      //$salary = Salary::all();
      //dd($salary);

      $desig = $salary->pluck("designation_id")->toArray();
      //dd(array_unique($desig));
      $unique_desig = array_unique($desig);

      $salaries = MonthlySalary::whereMonth("created_at",date("m"))->get();
      //dd($salaries);
      return view('backend.pages.salaryreport.list',compact('salary','unique_desig','employees','salaries'));  
    }


    public function certificate()

    {
      return view('backend.pages.salaryreport.certificate');
    }
    






}
