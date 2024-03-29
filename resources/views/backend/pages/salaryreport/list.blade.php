@extends('backend.master')


@section('content')
<h1 class="text-center display-6">Monthly Salary Report</h1>


<button onclick="window.print(); return false;" class="btn btn-primary">Print</button>

<h1 class="text-left display-8"><label for=""><input type="month" value="2023-04"></label></h1>
<table class="table mt-5">
  <thead>
    <tr class="table-info">
      <th scope="col">#</th>
      <th scope="col">Employee_id</th>
      <th scope="col">Employee_name</th>
      <th scope="col">Designation</th>
      <th scope="col">Department</th>
      <th scope="col">Basic_Salary</th>
      <th scope="col">House_Rent</th>
      <th scope="col">Medical</th>
      <th scope="col">Transport</th>
      <th scope="col">Gross Salary</th>
      <th scope="col">Deduction</th>
      <th scope="col">Bonus</th>
      <th scope="col">Net Salary </th>
      <th scope="col">Get Certificate</th>
    </tr>
  </thead>
  <tbody>

  @foreach($salaries as $key=>$data)

  @if($data->employee?->user->id == auth()->user()->id || auth()->user()->role_id == 1 || auth()->user()->role_id == 2)




  @php
  if($data->employee == null){
            continue;
          }
  $deduction=0;
  if(($data->deduction_id)){
  $ds= $data->deduction;
  $deduction= $ds->loan+$ds->leave_absent+$ds->advance_salary+$ds->destroy_elements+($data->employee->salary->basic_salary* $ds->tax)/100;

  }

  $bonus=0;
  if(($data->bonus_id)){
    $bs=$data->bonus;
   $bonus= $bs->eid_bonus+$bs->work_performance+$bs->others;
    
  }
  $grossSalary=0;
  $gs= $data->employee->salary;

  $basic_salary = $gs->basic_salary;
        $house_rent = $basic_salary * ($gs->house_rent /100);
        $medical = $basic_salary * ($gs->medical /100);
        $transport = $basic_salary * ($gs->transport /100);
        $grossSalary = $basic_salary + $house_rent + $medical + $transport;


  @endphp
  <tr>
      <td scope="row">{{$key+1}}</td>
      <td scope="col">{{$data->employee_id}}</td>
      <td scope="col">{{$data->employee->user->name}}</td>
      <td scope="col">{{$data->employee->designation->name}}</td>
      <td scope="col">{{$data->employee->department->name}}</td>
      <td scope="col">{{$data->employee->salary->basic_salary}}</td>
      <td scope="col">{{$data->employee->salary->house_rent}}</td>
      <td scope="col">{{$data->employee->salary->medical}}</td>
      <td scope="col">{{$data->employee->salary->transport}}</td>
      <td scope="col">{{$grossSalary}}</td>
      <td scope="col">{{$deduction}}</td>
      <td scope="col">{{$bonus}}</td>
      <td scope="col">{{$grossSalary+$bonus-$deduction}}</td>
    
      <td><a href="{{route('salary.certificate',$data->id)}}" class="btn btn-info">Salary Certificate</a></td>
    </tr>

    @endif
 

    @endforeach

  </tbody>
</table>
    

@endsection