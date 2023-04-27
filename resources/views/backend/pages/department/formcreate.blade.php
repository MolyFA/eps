@extends('backend.master')

@section('content')

<form action="{{route('department.form.store')}}"  method="post" >


@csrf

        <div class="form-group">
            <label for="name"><b>Name</b></label>
            <input required type="string" class="form-control" id="name" name="name" placeholder="Enter Department name">
        </div>

        <div class="form-group">
            <button  class="btn btn-primary">Submit</button>
        </div>

        



</form>





@endsection

