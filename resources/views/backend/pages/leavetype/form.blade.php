@extends('backend.master')

@section('content')


<h1>LeaveType List</h1>

<a href="{{route('leavetype.form')}}"   class="btn btn-success">Create LeaveType</a>




<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Tittle</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>



  @foreach($leavetype_list as $data)

<tr>
    <th scope="row">{{$data->id}}</th>
    <td>{{$data->tittle}}</td>
    


    <td>
              <a href="{{route('leavetype.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
              <a href="{{route('leavetype.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
              <a href="{{route('leavetype.view',$data->id)}}" class="btn btn-outline-success">View</a>
          </td>




</tr>
@endforeach
</tbody>
</table>



    
  
 



@endsection








