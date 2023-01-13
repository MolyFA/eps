@extends('backend.master')
@section('content')

<h1>Department List</h1>




<a href="{{route('department.form')}}"  class="btn btn-success">Create Department</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>

  @foreach($department_list as $data)

 

  <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->department_name}}</td>
      <td>{{$data->status}}</td>


      <td>
                <a href="{{route('department.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
                <a href="{{route('department.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('department.view',$data->id)}}" class="btn btn-outline-success">View</a>
      </td>
      

  </tr>
      


@endforeach

  </tbody>
</table>

{{$department_list->links()}}


@endsection