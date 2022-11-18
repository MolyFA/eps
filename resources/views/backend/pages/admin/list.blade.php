@extends('backend.master')
@section('content')


<h1> All Employees</h1>
<br>

        <a href="{{url('/admin/create')}}" class="btn btn-success">
        Create Employee
        </a>
        <br>


    <table class="table table-striped">
        <thead>
        <tr>
           
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($user_list as $data)
        
        <tr>
            
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            
            <td>
                
                <img  width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="employee_image">
                
            </td>
            
            
            <td>
                <a href="" class="btn btn-outline-primary">Update</a>
                <a href="" class="btn btn-outline-danger">Delete</a>
                <a href="" class="btn btn-outline-success">View</a>
            </td>
            
        </tr>
        
        @endforeach
        
        </tbody>
    </table>
    
  {{$user_list->links()}}

@endsection