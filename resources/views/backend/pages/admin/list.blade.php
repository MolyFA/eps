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
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($user_list as $data)
        
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->email}}</td>
            <td>{{$data->password}}</td>
            
            <td>
                <a href="" class="btn btn-outline-primary">Update</a>
                <a href="" class="btn btn-outline-danger">Delete</a>
                <a href="" class="btn btn-outline-success">View</a>
            </td>
        </tr>
        
        @endforeach
        
        </tbody>
    </table>


@endsection