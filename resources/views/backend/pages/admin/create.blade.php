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
            <label for="name"><b>Name</b></label>
            <input type="string" class="form-control" id="name"   name="user_name" placeholder="Enter Employee name">
        </div>
        <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input required type="string" class="form-control" id="email"  name="user_email" placeholder="Enter Employee email">
        </div>
        <div class="form-group">
            <label for="phone"><b>Phone Number</b></label>
            <input required type="string" class="form-control" id="phone"  name="phone_number" placeholder="Enter Employee email">
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