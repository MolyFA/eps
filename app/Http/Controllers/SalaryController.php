<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function startNow()
    {
        $salary_list=Salary::all();
        
        //dd($salary_list);
        



        return view('backend.pages.salary.form',compact('salary_list'));
    }


    public function formcreate()
     {

 
        return view('backend.pages.salary.formcreate');


     }




     public function store(Request $request)
     {

       // dd($request->all());

        Salary::create([
            'tittle'=>$request->tittle,
            'basic_salary'=>$request->basic_salary,
            'house_rent'=>$request->house_rent,
            'medical'=>$request->medical,
            'transport'=>$request->transport
        ]);
        
        
        return redirect()->route('salary');


    }






        public function deleteSalary(int $salary_id)
    {
           $test=Salary::find($salary_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','salary deleted successfully.');
             }else{
                 return redirect()->back()->with('error','salary not found.');
             }

    
    }





    public function viewSalary($salary_id)
    {
      $salary=Salary::find($salary_id);
      return view('backend.pages.salary.view',compact('salary_id'));
    }




    public function editSalary($salary_id)
    {

     $salary=Salary::find($salary_id);

     $salary_list=Salary::all();
     return view('backend.pages.salary.edit',compact('salary','salary_list'));

    
    }



    public function updateSalary(Request $request,$salary_id)
    {
        $salary=Salary::find($salary_id);  

      $salary->update([

            'tittle'=>$request->tittle,
            'basic_salary'=>$request->basic_salary,
            'house_rent'=>$request->house_rent,
            'medical'=>$request->medical,
            'transport'=>$request->transport

        ]);


     return redirect()->route('salary.form')->with('message','Update success.');

        
}
   




        





}
