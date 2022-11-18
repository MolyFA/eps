@extends('backend.master')

@section('content')

<h1>Employee List</h1>
@if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif




<a href="{{url('/employee/form')}}"   class="btn btn-success">Create Employee</a>




<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   
  
  
  @foreach($employee_list as $data)

  



    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      
      <td>
                
                <img  width="100px" style="border-radius: 10px"src="{{url('/uploads/'.$data->image)}}"  alt="employee_image">
                
      </td>

      <td>
                <a href="" class="btn btn-outline-primary">Update</a>
                <a href="{{route('employee.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('employee.view',$data->id)}}" class="btn btn-outline-success">View</a>
      </td>
            


</tr>


@endforeach



  </tbody>

</table>



{{$employee_list->links()}}



@endsection