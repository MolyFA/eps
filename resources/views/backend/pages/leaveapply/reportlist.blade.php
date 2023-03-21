@extends('backend.master')

@section('content')

<div class="container">
<h1>leave Report list</h1>

<button onclick="window.print(); return false;" class="btn btn-primary">Print</button>
<table class="table mt-5">
  <thead>
    <tr class="table-info">
      <th scope="col">#</th>
      <th scope="col">Employee_id</th>
      <th scope="col">Employee_name</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Total Leave</th>
      <th scope="col">Leave Taken</th>
      <th scope="col">Emergency Leave</th>
    </tr>
  </thead>
  <tbody>
    
  
@foreach ($unique_leave as $key=>$data)
     
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td scope="col">{{$data->employee_id}}</td>
      <td scope="col">{{$data->employee->user->name}}</td>
      <td scope="col">{{$data->employee->department->name}}</td>
      <td scope="col">{{$data->employee->designation->name}}</td>
      <td scope="col">3</td>
      <td scope="col">{{$data->count}}</td>
      <td scope="col">0</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>














@endsection