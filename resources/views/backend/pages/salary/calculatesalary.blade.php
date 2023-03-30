@extends('backend.master')

@section('content')



<div class="container">
     <form action="{{route('save.here',$salary->id)}}" method="post">
          @csrf
          <div class="row">
               <div class="col-md-8">
                    <div class="row">
                         <div class="col-md-12">
                              <h1>Basic_Salary</h1><input type="number" name="basic_salary" class="form-control" placeholder="{{$salary->basic_salary}}">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>House_rent (%)</h1><input type="number"  name="house_rent" class="form-control" placeholder="{{$salary->house_rent}}">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>medical (%)</h1><input type="number"  name="medical" class="form-control" placeholder="{{$salary->medical}}">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>transport (%)</h1><input type="number"  name="transport" class="form-control" placeholder="{{$salary->transport}}">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>loan </h1><input type="number"  name="loan" class="form-control" placeholder="">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>leave_absent</h1><input type="number"  name="leave_absent" class="form-control" placeholder="">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>tax</h1><input type="number"  name="tax" class="form-control" placeholder="">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>salary advance</h1><input type="number"  name="salary advance" class="form-control" placeholder="">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>destroy elements</h1><input type="number"  name="destroy elements" class="form-control" placeholder="">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>eid bonus</h1><input type="number"  name="eid bonus" class="form-control" placeholder="">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>work performance</h1><input type="number"  name="work performance" class="form-control" placeholder="">
                         </div>
                         <div class="col-md-12 mt-5">
                              <h1>others</h1><input type="number" name="others" class="form-control" placeholder="">
                         </div>



                    </div>
               </div>


               <div class="col-md-4">
                    <div class="row">
                         <button type="submit" class="btn btn-info"> Save Here</button>


                         <div class="col-md-12">Gross_Salary<input type="number" name="gross_salary" class="form-control" placeholder="click to calculate"></div>
                         <div class="col-md-12">Deduction<input type="number" name="deduction" class="form-control" placeholder="click to calculate"></div>
                         <div class="col-md-12">Bonus<input type="number" name="bonus" class="form-control" placeholder="click to calculate"></div>
                         <div class="col-md-12">Net_Salary<input type="number" name="net_salary" class="form-control" placeholder="click to calculate"></div>



                    </div>
               </div>
          </div>

     </form>

</div>







@endsection