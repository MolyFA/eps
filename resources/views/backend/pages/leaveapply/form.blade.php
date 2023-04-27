@extends('backend.master')

@section('content')


<div class="container">
<h1>LeaveApplying List</h1>

<a href="{{route('leaveapply.form')}}"   class="btn btn-primary">Apply For Leave</a>
<button onclick="window.print(); return false;" class="btn btn-primary">Print</button>

<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Employee Name</th>
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

  @if($data->employee?->user->id == auth()->user()->id || auth()->user()->role_id == 1 || auth()->user()->role_id == 2)

 

<tr>
    <th scope="row">{{$data->id}}</th>
    <td>{{$data->employee?->user->name,$data->employee?->user_id,$data->employee?->user->email,$data->employee?->user->email_verified_at,$data->employee?->user->password}}</td>
    <td>{{$data->date}}</td>
    <td>{{$data->tittle}}</td>
    <td>{{$data->letter}}</td>
    <td>{{$data->leavetype->tittle}}</td>
    <td>{{$data->status}}</td>
    

    <td>

    @if(auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
              <a href="{{route('leaveapply.reject',$data->id)}}" class="btn btn-outline-danger">Rejected</a>
              <a href="{{route('leaveapply.approve',$data->id)}}" class="btn btn-outline-success">Approve</a>
    
    @endif
    </td>




</tr>
@endif
@endforeach
</tbody>
</table>
</div>

{{$leaveapply_list->links()}}



@endsection