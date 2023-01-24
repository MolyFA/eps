@extends('backend.master')

@section('content')



<form action="{{route('leave.form.store')}}"  method="post">

@csrf

<div class="form-group">
            <label for="name"><b>Name</b></label>
            <input required type="text" class="form-control" id="name" name="leave_name" placeholder="Enter leave Name">
        </div>
        <div class="form-group">
       
        <div class="form-group">
            <label for="date"><b>Date</b></label>
            <input  type="date" class="form-control" id="date" name="leave_date" placeholder="Enter leave Date">
        </div>

        <div class="form-group">
            <label for="details"><b>Details</b></label>
            <input type="details" class="form-control" id="details" name="leave_details" placeholder="Enter leave details">
        </div>

        <div class="form-group">
            <label for="leave type"><b>Leave Type</b></label>
            <input type="text" class="form-control" id="leave type" name="leave_type" placeholder="Enter leave type">
        </div>

        <div class="form-group">
            <button  class="btn btn-primary">Submit</button>
        </div>
        
    












</form>




@endsection