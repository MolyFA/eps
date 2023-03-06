@extends('backend.master')

@section('content')


<h1>Update Role</h1>


<form action="{{route('role.update',$role->id)}}"  method="post" >
  
     @method('put')

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
            <label for="name"><b>Role Name</b></label>
            <input type="string" class="form-control" id="name" name="name" placeholder="Enter Department name" value="{{$role->name}}">
        </div>
       


        <div class="form-group">
            <button  class="btn btn-primary">Update</button>
        </div>



</form>
















@endsection