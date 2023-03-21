<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Role;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function field()
  {

    //$employee_list=Employee::all();

    //dd($employee_list);


    $employee_list = Employee::with('department')->with("user")->paginate(5);





    return view('backend.pages.employee.form', compact('employee_list'));
  }



  public function formcreate()
  {


    //$designation= Designation::all();
    //$salary= Salary::all();

    $department = Department::all();
    $role = Role::all();
    return view('backend.pages.employee.formcreate', compact( 'department', 'role'));
  }


  public function store(Request $request)
  {

    // dd($request->all());
    $request->validate([
      'user_name' => 'required',
      'user_email' => 'required|unique:users,email',
    ]);



    $fileName = null;
    if ($request->hasFile('image')) {
      //generate name
      $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('/uploads', $fileName);
    }


    // dd($request->all());

    $user = User::create([

      'name' => $request->user_name,
      'email' => $request->user_email,

      "password" => bcrypt($request->userPass),
      'role_id' => $request->role,
    ]);

    Employee::create([

      "user_id" => $user->id,
      'department_id' => $request->department_id,
      'designation_id' => $request->designation,
      'phone' => $request->user_phone,
      'salary_id' => $request->salary,
      'image' => $fileName,


    ]);
    //dd($fileName); die;


    return redirect()->route('employee');
  }

  public function deleteEmployee($employee_id)
  {
    $test = Employee::find($employee_id);
    if ($test) {
      $test->delete();
      return redirect()->back()->with('message', 'employee deleted successfully.');
    } else {
      return redirect()->back()->with('error', 'employee not found.');
    }
  }

  public function viewEmployee($employee_id)
  {
    $employee = Employee::find($employee_id);
    // dd($employee);
    return view('backend.pages.employee.view', compact('employee'));
  }



  public function editEmployee($employee_id)
  {

    $employee = Employee::find($employee_id);

    $employee_list = Employee::all();
    return view('backend.pages.employee.edit', compact('employee', 'employee_list'));
  }


  public function updateEmployee(Request $request, $employee_id)
  {
    $employee = Employee::find($employee_id);

    $employee->update([

      'name' => $request->user_name,
      'email' => $request->user_email,
      'phone' => $request->user_phone,



    ]);


    return redirect()->route('employee.form')->with('message', 'Update success.');
  }
  public function getSalary(Request $request){
    $salary = Salary::where("designation_id",$request->id)->first();

    return $salary;
  }
}
