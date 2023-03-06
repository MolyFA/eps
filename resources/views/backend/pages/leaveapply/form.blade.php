@extends('backend.master')

@section('content')



<h1>LeaveApplying List</h1>

<a href="{{route('leaveapply.form')}}"   class="btn btn-success">Create LeaveApply</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Employee</th>
      <th scope="col">Date</th>
      <th scope="col">Tittle</th>
      <th scope="col">Letter</th>
      <th scope="col">Leave_Type</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>



  @foreach($leaveapply_list as $data)


 

<tr>
    <th scope="row">{{$data->id}}</th>
    <td>{{$data->employee->user->name,$data->employee->user_id,$data->employee->user->email,$data->employee->user->email_verified_at,$data->employee->user->password}}</td>
    <td>{{$data->date}}</td>
    <td>{{$data->tittle}}</td>
    <td>{{$data->letter}}</td>
    <td>{{$data->leavetype->tittle}}</td>
    <td>{{$data->status}}</td>
    

    <td>
              <a href="{{route('leaveapply.reject',$data->id)}}" class="btn btn-outline-danger">Rejected</a>
              <a href="{{route('leaveapply.approve',$data->id)}}" class="btn btn-outline-success">Approve</a>
    </td>




</tr>
@endforeach
</tbody>
</table>






@endsection