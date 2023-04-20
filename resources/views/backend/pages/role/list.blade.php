@extends('backend.master')

@section('content')

<div class="container">
     <a class="btn btn-primary my-4" href = "{{route('role.create')}}" >Create Role</a>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($roles as $key=>$data)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->name}}</td>
      


      <td>
      
                <a href="{{route('role.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
                <a href="{{route('role.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('role.view',$data->id)}}" class="btn btn-outline-success">View</a>
      </td>
            

  </tr>
  @endforeach
  </tbody>
</table>
</div>

{{$roles->links()}}

@endsection