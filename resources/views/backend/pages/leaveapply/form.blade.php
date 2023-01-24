@extends('backend.master')

@section('content')

<h1>LeaveApplying List</h1>

<a href="{{route('leaveapply.form')}}"   class="btn btn-success">Create LeaveApply</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Employee</th>
      <th scope="col">Tittle</th>
      <th scope="col">Letter</th>
      <th scope="col">Leave</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>



  @foreach($leaveapply_list as $data)

<tr>
    <th scope="row">{{$data->id}}</th>
    <td>{{$data->employee->name,$data->employee->email,$data->employee->phone,$data->employee->salary_id,$data->employee->image}}</td>
    <td>{{$data->tittle}}</td>
    <td>{{$data->letter}}</td>
    <td>{{$data->leave}}</td>
    


    <td>
              <a href="{{route('leaveapply.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
              <a href="{{route('leaveapply.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
              <a href="{{route('leaveapply.view',$data->id)}}" class="btn btn-outline-success">View</a>
          </td>




</tr>
@endforeach
</tbody>
</table>






@endsection