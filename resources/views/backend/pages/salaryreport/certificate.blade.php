@extends('backend.master')

@section('content')
<div class="container mt-5">

     <button onclick="window.print(); return false;" class="btn btn-primary">Print<button>

               <h1 class="display-4 pb-3" style="font-weight: bold">Salary Certificate</h1>
               <h2 class="h2 pb-5">JustDone Ltd</h2>
               <p class="text-justify" style="font-size:20px; line-height:3.8rem">This is to certify theat Mr./Miss/Mrrs <b><i>{{$salary->employee->user->name}}</i></b> (Employee #) is working with our esteem organization/company under the title of <b><i>{{$salary->employee->designation->name}}</i></b> since------------------------ (Date of inception of job). We found this gentelman fully committed to his/her job and and totally since toward this organization/company
                    We are issuing this letter on the specific request of oyr employee without accepting any liability on behalf of this letter or part of this letter on our organization/company.</p>
               <p style="font-size:20px; margin-top:5px"><b>His/Her Salary particulars are given below</b></p>
               <table class="table table-striped">
                    <thead>
                         <tr>
                              <th scope="col">Name</th>
                              <th scope="col"></th>
                              <th colspan="2">Amount</th>

                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <td colspan="2">Mark</td>
                              <td></td>
                              <td>12000</td>
                         </tr>
                         <tr >
                              <td></td>
                              <td colspan="2" style="background-color: #000; color:#fff">SubTotal</td>
                              <td style="background-color: #000; color:#fff">Gross Salary</td>
                         </tr>
                    </tbody>
               </table>


               <table class="table table-striped">
                    <thead>
                         <tr>
                              <th scope="col">Name</th>
                              <th scope="col"></th>
                              <th colspan="2">Amount</th>

                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <td colspan="2">Mark</td>
                              <td></td>
                              <td>12000</td>
                         </tr>
                         <tr >
                              <td></td>
                              <td colspan="2" style="background-color: #000; color:#fff">SubTotal</td>
                              <td style="background-color: #000; color:#fff">Net Salary</td>
                         </tr>
                    </tbody>
               </table>

              

</div>

@endsection