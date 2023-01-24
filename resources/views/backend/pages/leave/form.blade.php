@extends('backend.master')

@section('content')


<h1>Leave List</h1>

<a href="{{route('leave.form')}}"   class="btn btn-success">Create Leave</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Datails</th>
      <th scope="col">Leave Type</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>



  @foreach($leave_list as $data)

<tr>
    <th scope="row">{{$data->id}}</th>
    <td>{{$data->name}}</td>
    <td>{{$data->date}}</td>
    <td>{{$data->details}}</td>
    <td>{{$data->leave_type}}</td>


    <td>
              <a href="{{route('leave.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
              <a href="{{route('leave.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
              <a href="{{route('leave.view',$data->id)}}" class="btn btn-outline-success">View</a>
          </td>




</tr>
@endforeach
</tbody>
</table>








@endsection