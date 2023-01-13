<?php

namespace App\Http\Controllers;


use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function startOne()
    {

        $designation_list=Designation::all();
        //dd($designation_list);
        
        return view('backend.pages.designation.form',compact('designation_list'));
     

    }

    public function formcreate()
    {
       

       return view('backend.pages.designation.formcreate');


    }


    public function store(Request $request)
    {



        //dd($request->all());


        Designation::create([
            'id'=>$request->user_id,
            'name'=>$request->user_name,
            'status'=>$request->status
        
        ]);
        
        
        return redirect()->route('designation');
        


    }

    


 
    public function deleteDesignation(int $designation_id)
    {
           $test=Designation::find($designation_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','designation deleted successfully.');
             }else{
                 return redirect()->back()->with('error','designation not found.');
             }

    
    }



    public function viewDesignation($designation_id)
    {
      $designation=Designation::find($designation_id);
      return view('backend.pages.designation.view',compact('designation_id'));
    }



    public function editDesignation($designation_id)
    {

     $designation=Designation::find($designation_id);

     $designation_list=Designation::all();
     return view('backend.pages.designation.edit',compact('designation','designation_list'));

    
    }


    public function updateDesignation(Request $request,$designation_id)
    {
        $designation=Designation::find($designation_id);  

      $designation->update([

        'id'=>$request->user_id,
        'name'=>$request->user_name,
        'status'=>$request->status,
         ]);


     return redirect()->route('designation.form')->with('message','Update success.');

        
}
   









}
