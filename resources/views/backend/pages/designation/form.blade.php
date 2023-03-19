@extends('backend.master')

@section('content')

<h1>Designation List</h1>



<a href="{{route('designation.form')}}"   class="btn btn-success">Create Designation</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Department</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>


  @foreach($designation_list as $data)

  <tr>
      <th scope="row">{{$data->id}}</th>
      <th>{{$data->department->name}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>


      <td>
                <a href="{{route('designation.edit', $data->id)}}" class="btn btn-outline-primary">Edit</a>
                <a href="{{route('designation.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('designation.view',$data->id)}}" class="btn btn-outline-success">View</a>
            </td>




</tr>
@endforeach

</tboay>
</table>


@endsection