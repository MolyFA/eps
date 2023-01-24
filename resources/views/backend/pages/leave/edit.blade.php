@extends('backend.master')

@section('content')

<form action="{{route('leave.update',$leave->id)}}" method="post">

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
            <label for="name"><b>Name</b></label>
            <input required type="text" class="form-control" id="name" name="leave_name" placeholder="Enter leave Name" value="{{$leave->name}}">
        </div>
        <div class="form-group">
       
        <div class="form-group">
            <label for="date"><b>Date</b></label>
            <input  type="date" class="form-control" id="date" name="leave_date" placeholder="Enter leave Date"  value="{{$leave->date}}">
        </div>

        <div class="form-group">
            <label for="details"><b>Details</b></label>
            <input type="details" class="form-control" id="details" name="leave_details" placeholder="Enter leave details"  value="{{$leave->details}}">
        </div>

        <div class="form-group">
            <label for="leave type"><b>Leave Type</b></label>
            <input type="text" class="form-control" id="leave type" name="leave_type" placeholder="Enter leave type"  value="{{$leave->leave_type}}">
        </div>

        <div class="form-group">
            <button  class="btn btn-primary">Update</button>
        </div>




</form>






@endsection