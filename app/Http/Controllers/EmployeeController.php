<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function field()
    {
        return view('backend.pages.employee.form');
    }
    public function formcreate()
    {
        return view('backend.pages.employee.formcreate');
    }

}
