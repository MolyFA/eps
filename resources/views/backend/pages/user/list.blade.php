@extends('backend.master')

@section('content')

<div class="container">
  <a href="{{route('user.create')}}" class="btn btn-primary my-4">Create User</a>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  
  @foreach($users as $key=>$data)

  
  
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->role?->name}}</td>
      <td>{{$data->email}}</td>
      
    
    <td>
                <a href="" class="btn btn-outline-primary">Edit</a>
                <a href="{{route('user.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('user.view',$data->id)}}" class="btn btn-outline-success">View</a>
      </td>
            
    </tr>
    @endforeach
  </tbody>
</table>
</div>


{{$users->links()}}




@endsection