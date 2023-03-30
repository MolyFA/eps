@extends('backend.master')

@section('content')


<h1>Monthly salary</h1>

@if(!$salaries)

<a href="{{route('generate.salary')}}" class="btn btn-primary">Generate Salary</a>

@else


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Month</th>
      <th scope="col">Employee</th>
      <th scope="col">Deductions</th>
      <th scope="col">Bonus</th>
      <th scope="col">Net Salary</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($salaries as $salary)
    
     @php
          $deduction = 0;
          if(isset($salary->deduction)){
               $deductSalary = $salary->deduction;
               

               $deduction = $deductSalary->loan + $deductSalary->destroy_elements + $deductSalary->advance_salary + ($salary->employee->salary->basic_salary * $deductSalary->tax)/100 +  $deductSalary->leave_absent;
          }
          $totalBonus = 0;
          if(isset($salary->bonus)){
               $bonusSalary = $salary->bonus;
               $totalBonus = $bonusSalary->eid_bonus + $bonusSalary->work_performance+ $bonusSalary->others;
          }

     @endphp
    <tr>
      <th scope="row">1</th>
      <td>{{$salary->created_at->format('M')}}</td>
      <td>{{$salary->employee->user->name}}</td>
      <td>{{$deduction}}</td>
      <td>{{$totalBonus}}</td>
      <td>{{($salary->net_salary + $totalBonus) - $deduction}}</td>
      <td>
        <a href="{{route('salary.calculate',$salary->id)}}">calculate Salary</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
@endsection