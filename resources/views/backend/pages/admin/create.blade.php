@extends('backend.master')
@section('content')


<form action="{{route('admin.employee')}}" method="post"  enctype="multipart/form-data">
    @if($errors->any())
      @foreach($errors->all() as $message)
        <p class="alert alert-danger">{{$message}}</p>
      @endforeach
    @endif


    @csrf
           
     <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input type="string" class="form-control" id="email"   name="user_email" placeholder="Enter Employee Email">
        </div>
        <div class="form-group">
            <label for="password"><b>Password</b></label>
            <input required type="string" class="form-control" id="password"  name="user_password" placeholder="Enter Employee password">
        </div>
        <div class="form-group">
            <label for="image">Upload Image</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>


        
            <div class="form-group">
            <button  class="btn btn-primary">Submit</button>
        </div>
        
    </form>

@endsection