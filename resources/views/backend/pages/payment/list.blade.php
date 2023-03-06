@extends('backend.master')

@section('content')

<h1>Payment List</h1>

<a href="{{route('payment.list')}}"   class="btn btn-success">Create Payment</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Employee Name</th>
     <th scope="col">Date</th>
      <th scope="col">Deduction_salary</th>
      <th scope="col">Bonus</th>
      <th scope="col">Total_Salary</th>
      <th scope="col">Total_Amount</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  @foreach ($payment_list as $key=>$data)
  
  @php 
      $salary = $data->employee->salary;
      $totalSalary = $salary->basic_salary + $salary->house_rent+ $salary->medical+ $salary->transport;
  @endphp
    <tr>

    
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->employee->user->name}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->deduction_salary}}</td>
      <td>{{$data->bonus}}</td>
      <td>{{$totalSalary}}</td>
      <td id="total_amount-{{$data->id}}">${{($totalSalary + $data->bonus) - $data->deduction_salary }}</td>
      <td>
        <form action="{{route('pay.now', $data->id)}}" method="post">
          @csrf
          <input type="hidden" name="total_payment" id="total_payment-{{$data->id}}" value="{{($totalSalary + $data->bonus) - $data->deduction_salary }}">
          <button type="submit" class="btn btn-outline-primary" data-id="{{$data->id}}">Payment Salary</button>  
        </form>
      </td>
            

  </tr>
  @endforeach
  </tbody>
</table>







@endsection