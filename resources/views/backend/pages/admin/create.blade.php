@extends('backend.master')
@section('content')


<form action="{{route('admin.employee')}}" method="post">
    @csrf
    


        <div class="form-group">
        <label for="identification"><b>ID</b></label>
            <input type="string" class="form-control"name="" id="name" placeholder="Enter Employee Name">
        </div>
        <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input type="text" class="form-control" id="name"name="user_email" placeholder="Enter Employee Name">
        </div>
       <div class="form-group">
            <label for="password"><b>Password</b></label>
            <input type="password" class="form-control" id="password"name="user_password" placeholder="Enter Employee Password">
        </div>
        <div class="form-group">
            <button  class="btn btn-primary">Submit</button>
        </div>
        
    </form>

@endsection