<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryReportController extends Controller
{
    public function report()
    {
      return view('backend.pages.salaryreport.list');  
    }
}
