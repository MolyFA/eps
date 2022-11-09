@extends('backend.master')
@section('content')


<form action="{{route('admin.employee')}}" method="post">


 
     @csrf
           
     <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input type="string" class="form-control" id="email"   name="user_email" placeholder="Enter Employee Email">
        </div>
        <div class="form-group">
            <label for="password"><b>Password</b></label>
            <input type="string" class="form-control" id="password"   name="user_password" placeholder="Enter Employee password">
        </div>
        
        
            <div class="form-group">
            <button  class="btn btn-primary">Submit</button>
        </div>
        
    </form>

@endsection