@extends('backend.master')

@section('content')

<form action="{{route('salary.form.store')}}"  method="post">

@csrf




<div class="form-group">
            <label for="tittle"><b>Tittle</b></label>
            <input required type="text" class="form-control" id="tittle" name="tittle" placeholder="Enter employee tittle">
</div>

<div class="form-group">
            <label for="basic salary"><b>Basic Salary</b></label>
            <input required type="number" class="form-control" id="basic salary" name="basic_salary" placeholder="Enter employee basic salary">
</div>

<div class="form-group">
            <label for="house rent"><b>House Rent</b></label>
            <input required type="number" class="form-control" id="house rent" name="house_rent" placeholder="Enter employee house rent">
</div>

<div class="form-group">
            <label for="medical"><b>Medical</b></label>
            <input required type="number" class="form-control" id="medical" name="medical" placeholder="Enter employee medical">
</div>

<div class="form-group">
            <label for="transport"><b>Transport</b></label>
            <input required type="number" class="form-control" id="transport" name="transport" placeholder="Enter employee transport">
</div>


<div class="form-group">
            <button  class="btn btn-primary">Submit</button>
</div>






</form>





















@endsection