@extends('backend.master')

@section('content')

<h1 class="text-center display-4">Pay Slip</h1>
<div class="d-flex justify-content-between">
  <div>
  <button onclick="window.print(); return false;" class="btn btn-primary">Print</button>
  <label for=""><input type="month" value="2023-04"></label>
  </div>
  <form action="{{route('salary.search')}}" method="get">
    <input type="text" name="search" class="form-control">
    <input type="submit" value="Submit" class="btn btn-primary">
  </form>
</div>

@if($salaries->count() === 0)

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
    @foreach($salaries as $key=>$salary)
    @if($salary->employee?->user->id == auth()->user()->id || auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
    @php
    if($salary->employee == null){
    continue;
    }
    $deduction = 0;
    if(isset($salary->deduction)){
    $deductSalary = $salary->deduction;

    $deduction = $deductSalary->loan + $deductSalary->destroy_elements + $deductSalary->advance_salary + ($salary->employee->salary->basic_salary * $deductSalary->tax)/100 + $deductSalary->leave_absent;
    }
    $totalBonus = 0;
    if(isset($salary->bonus)){
    $bonusSalary = $salary->bonus;
    $totalBonus = $bonusSalary->eid_bonus + $bonusSalary->work_performance+ $bonusSalary->others;
    }
    @endphp

    <tr>

      <th scope="row">{{$key+1}}</th>
      <td>{{$salary->created_at->format('M')}}</td>
      <td>{{$salary->employee?->user->name}}</td>
      <td>{{$deduction}}</td>
      <td>{{$totalBonus}}</td>
      <td>{{($salary->net_salary + $totalBonus) - $deduction}}</td>

      <td>
        @if(auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
        <a href="{{route('salary.calculate',$salary->id)}}">calculate Salary</a>
        @endif
      </td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>
@endif
@endsection