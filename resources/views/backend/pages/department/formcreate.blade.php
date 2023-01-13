@extends('backend.master')

@section('content')

<form action="{{route('department.form.store')}}"  method="post" >


@csrf


<div class="form-group">
            <label for="id"><b>ID</b></label>
            <input  type="text" class="form-control" id="id" name="user_id" placeholder="Enter Employee ID">
        </div>

        <div class="form-group">
            <label for="name"><b>Name</b></label>
            <input type="string" class="form-control" id="name" name="user_name" placeholder="Enter Department name">
        </div>
        <div class="form-group">
            <label for=""><b>Select Status</b></label>
            <select name="status" id="" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>

        </select>
        </div>

        <div class="form-group">
            <button  class="btn btn-primary">Submit</button>
        </div>



</form>





@endsection

