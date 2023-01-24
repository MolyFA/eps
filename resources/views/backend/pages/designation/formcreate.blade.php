@extends('backend.master')

@section('content')

<form action="{{route('designation.form.store')}}"   method="post">

@csrf



<div class="form-group">
            <label for="name"><b>Name</b></label>
            <input required type="text" class="form-control" id="name" name="user_name" placeholder="Enter Employee Name">
</div>




<div class="form-group">
            <button  class="btn btn-primary">Submit</button>
</div>




</form>






@endsection