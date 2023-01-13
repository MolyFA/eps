@extends('backend.master')

@section('content')

<h1>Salary List</h1>

<a href="{{route('salary.form')}}"   class="btn btn-success">Create Salary</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Tittle</th>
      <th scope="col">Basic Salary</th>
      <th scope="col">House Rent</th>
      <th scope="col">Medical</th>
      <th scope="col">Transport</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>




@endsection