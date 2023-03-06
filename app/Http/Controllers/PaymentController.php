<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function start()
    {

        $att = Attendance::where("employee_id", auth()->user()->id)->get();
        $att_count = count($att);
        
        

        $dateFrom = new \DateTime(now()->startOfMonth());
        $dateTo = new \DateTime(now()->endOfMonth());
        $dates = [];

        if ($dateFrom > $dateTo) {
            return $dates;
        }

        if (1 != $dateFrom->format('N')) {
            $dateFrom->modify('next friday');
        }

        while ($dateFrom <= $dateTo) {
            $dates[] = $dateFrom->format('Y-m-d');
            $dateFrom->modify('+1 week');
        }
        $totalDays =  now()->month(now()->format('m'))->daysInMonth;

        $workingDays = $totalDays - count($dates);

        $totalPresent = $workingDays - $att_count;

        
      $employee_list=Employee::with('department')->get();
    //   dd($employee_list);

          $payment_list=Payment::all();    
        return view('backend.pages.payment.list', compact("totalPresent","employee_list","payment_list"));
    }




    
    public function list()
    {

       
        $employee=Employee::all();
        return view('backend.pages.payment.formcreate',compact('employee'));

    }
    public function store(Request $request){
       // dd($request->all());
        Payment::create([
           'employee_id'=>$request->employee_id,
           'date'=>$request->date,
           'deduction_salary'=>$request->deduction_salary,
           'bonus'=>$request->bonus,
           'total_amount'=>$request->total_amount

        ]);

        return redirect()->route('payment');
    }


    

    
}
