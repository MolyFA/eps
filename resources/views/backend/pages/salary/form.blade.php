@extends('backend.master')

@section('content')


<h1 class="text-center display-6">Salary List</h1>
<div class="container">
<button onclick="window.print(); return false;" class="btn btn-primary">Print</button>
<a href="{{route('salary.form')}}"   class="btn btn-info">Create Salary</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Basic Salary</th>
      <th scope="col">House Rent</th>
      <th scope="col">Medical</th>
      <th scope="col">Transport</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>


  @foreach($salary_list as $data)

  <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->department->name}}</td>
      <td>{{$data->designation->name}}</td>
      <td>{{$data->basic_salary}}</td>
      <td>{{$data->house_rent}}</td>
      <td>{{$data->medical}}</td>
      <td>{{$data->transport}}</td>


      <td>
                <a href="{{route('salary.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
                <a href="{{route('salary.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('salary.view',$data->id)}}" class="btn btn-outline-success">View</a>
                
                

            </td>




</tr>
@endforeach
  </tbody>
</table>
</div>




{{$salary_list->links()}}

@endsection