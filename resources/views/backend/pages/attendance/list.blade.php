@extends('backend.master')

@section('content')


<h1>Attendance List</h1>


<a href="{{route('attendance.check')}}"  class="btn btn-success">Checkin_Attendance</a>
<br>
<br>
<a href="{{route('attendance.check-out')}}"  class="btn btn-success">Checkout_Attendance</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">Employee_Name</th>
      <th scope="col">Checkin_Time</th>
      <th scope="col">Checkout_Time</th>
      <th scope="col">Status</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>



  
  @foreach($attendances as $data)

  <tr>


  <th scope="row">{{$data->id}}</th>
      <td>{{$data->date}}</td>
      <td>{{auth()->user()->name}}</td>
      <td>{{$data->checkin_time}}</td>
      <td>{{$data->checkout_time}}</td>
      <td>{{$data->status}}</td>
      


 </tr>











  @endforeach




@endsection