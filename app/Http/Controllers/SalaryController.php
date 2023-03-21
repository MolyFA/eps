<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function startNow()
    {
        $salary_list = Salary::all();

        //dd($salary_list);




        return view('backend.pages.salary.form', compact('salary_list'));
    }


    public function formcreate()
    {



        $department = Department::all();
        $designation = Designation::all();

        //dd($department);
        //dd($designation);
        return view('backend.pages.salary.formcreate', compact('department', 'designation'));
    }




    public function store(Request $request)
    {

        // dd($request->all());

        Salary::create([
            'department_id' => $request->department,
            'designation_id' => $request->designation,
            'basic_salary' => $request->basic_salary,
            'house_rent' => $request->house_rent,
            'medical' => $request->medical,
            'transport' => $request->transport
        ]);


        return redirect()->route('salary');
    }






    public function deleteSalary(int $salary_id)
    {
        $test = Salary::find($salary_id);
        if ($test) {
            $test->delete();
            return redirect()->back()->with('message', 'salary deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'salary not found.');
        }
    }





    public function viewSalary($salary_id)
    {
        $salary = Salary::find($salary_id);
        return view('backend.pages.salary.view', compact('salary'));
    }




    public function editSalary($salary_id)
    {

        $salary = Salary::find($salary_id);

        $salary_list = Salary::all();
        return view('backend.pages.salary.edit', compact('salary', 'salary_list'));
    }



    public function updateSalary(Request $request, $salary_id)
    {
        $salary = Salary::find($salary_id);

        $salary->update([

            'tittle' => $request->tittle,
            'basic_salary' => $request->basic_salary,
            'house_rent' => $request->house_rent,
            'medical' => $request->medical,
            'transport' => $request->transport

        ]);


        return redirect()->route('salary')->with('message', 'Update success.');
    }
    public function getDesignation(Request $request){
        
        $designation = Designation::where("department_id",$request->id)->get();
        return $designation;
    }
}
