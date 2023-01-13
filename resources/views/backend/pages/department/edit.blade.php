@extends('backend.master')

@section('content')


<h1>Update Department</h1>


<form action="{{route('department.update',$department->id)}}"  method="post" >
  
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
            <label for="id"><b>ID</b></label>
            <input  type="text" class="form-control" id="id" name="user_id" placeholder="Enter Employee ID" value="{{$department->id}}" >
        </div>

        <div class="form-group">
            <label for="name"><b>Name</b></label>
            <input type="string" class="form-control" id="name" name="user_name" placeholder="Enter Department name" value="{{$department->name}}">
        </div>
        <div class="form-group">
            <label for=""><b>Select Status</b></label>
            <select name="status" id="" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>

        </select>
        </div>


        <div class="form-group">
            <button  class="btn btn-primary">Update</button>
        </div>



</form>
















@endsection