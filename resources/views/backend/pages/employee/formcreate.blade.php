@extends('backend.master')

@section('content')

<form action="{{route('form.store')}} " method="post">
@if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

            @if(session()->has('message'))
                <p class="alert alert-success">{{session()->get('message')}}</p>
            @endif





    @csrf



<div class="form-group">
            <label for="name"><b>Name</b></label>
            <input required type="text" class="form-control" id="name" name="user_name" placeholder="Enter Employee Name">
        </div>
        <div class="form-group">
       
        <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input  type="text" class="form-control" id="email" name="user_email" placeholder="Enter Employee Email">
        </div>

        <div class="form-group">
            <label for="number"><b>Phone Number</b></label>
            <input type="string" class="form-control" id="number" name="user_phone" placeholder="Enter Employee Phone number">
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