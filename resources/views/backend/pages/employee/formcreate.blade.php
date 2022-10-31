@extends('backend.master')

@section('content')

<form>
<div class="form-group">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" id="name" placeholder="Enter Employee Name">
        </div>
        <div class="form-group">
            <label for="password"><b>Password</b></label>
            <input type="password" class="form-control" id="password" placeholder="Enter Employee Password">
        </div>
        <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input type="text" class="form-control" id="email" placeholder="Enter Employee Email">
        </div>
        <div class="form-group">
            <label for="number"><b>Phone Number</b></label>
            <input type="digit" class="form-control" id="number" placeholder="Enter Employee Phone number">
        </div>

        <div class="form-group">
        <label for="identify"><b>Gender</b></label><br>
          <input type="radio" id="male"  value="male">
          <label for="male">Male</label><br>
          <input type="radio" id="female" value="Female">
          <label for="female">Female</label><br>
          <input type="radio" id="Other"  value="Other">
          <label for="other">Other</label>
        </div>
        
<div class="form-group">
            <label for="number"><b>Joining Date</b></label>
            <input type="date" class="form-control" id="number" placeholder="Enter Employee date">
        </div>
        <div class="form-group">
            <label for="upload"><b>Employee File</b></label>
            <input type="file" class="form-control" id="number" >
        </div>
        <label for="ID">Choose ID</label><br>
  <select id="id" name="identification">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select><br>
  <div class="form-group">
            <button  class="btn btn-primary">Submit</button>
        </div>


</form>
@endsection