@extends('backend.master')

@section('content')

<h1 class="text-center display-6">Employee List</h1>

@if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif

<div class="container">
<button onclick="window.print(); return false;" class="btn btn-primary">Print</button>


@if(auth()->user()->role->name != "Employee")

<a href="{{route('employee.form')}}"   class="btn btn-primary">Create Employee</a>
@endif


<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Role </th>
      <th scope="col">Salary</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    
 
 
  @foreach($employee_list as $key=>$data)
 
    <tr>
    
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->user?->name}}</td>
      <td>{{$data->user?->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->department->name}}</td>
      <td>{{$data->designation->name}}</td>
      <td>{{$data->user?->role?->name}}</td>
      @php
        $salary = $data->salary;
        $basic_salary = $salary->basic_salary;
        $house_rent = $basic_salary * ($salary->house_rent /100);
        $medical = $basic_salary * ($salary->medical /100);
        $transport = $basic_salary * ($salary->transport /100);
        $totalSalary = $basic_salary + $house_rent + $medical + $transport;
      @endphp
      <td>{{ $totalSalary}}</td>
      
      <td>
                
                <img  width="50px" style="border-radius: 10px"src="{{url('/uploads/'.$data->image)}}"  alt="employee_image">
                
      </td>

      <td>
                <a href="{{route('employee.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
                <a href="{{route('employee.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('employee.view',$data->id)}}" class="btn btn-outline-success">View</a>
      </td>
            


</tr>


@endforeach



  </tbody>

</table>

</div>


{{$employee_list->links()}}



@endsection