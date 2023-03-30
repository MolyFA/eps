@extends('backend.master')


@section('content')
<h1>Salary Report List</h1>



<button onclick="window.print(); return false;" class="btn btn-primary">Print</button>

<table class="table mt-5">
  <thead>
    <tr class="table-info">
      <th scope="col">#</th>
      <th scope="col">Employee_id</th>
      <th scope="col">Employee_name</th>
      <th scope="col">Designation</th>
      <th scope="col">Department</th>
      <th scope="col">Basic_Salary</th>
      <th scope="col">House_Rent</th>
      <th scope="col">Medical</th>
      <th scope="col">Transport</th>
      <th scope="col">Gross Salary</th>
      <th scope="col">Deduction</th>
      <th scope="col">Bonus</th>
      <th scope="col">Net Salary </th>
      <th scope="col">Action</th>
      <th scope="col">Get Certificate</th>
    </tr>
  </thead>
  <tbody>

  @foreach($employees as $key=>$data)


  
  <tr>
      <td scope="row">{{$key+1}}</td>
      <td scope="col">{{$data->id}}</td>
      <td scope="col">{{$data->user->name}}</td>
      <td scope="col">{{$data->designation->name}}</td>
      <td scope="col">{{$data->department->name}}</td>
      <td scope="col">{{$data->salary->basic_salary}}</td>
      <td scope="col">{{$data->salary->house_rent}}</td>
      <td scope="col">{{$data->salary->medical}}</td>
      <td scope="col">{{$data->salary->transport}}</td>
      <td scope="col">Gross Salary</td>
      <td scope="col">Deduction</td>
      <td scope="col">Bonus</td>
      <td scope="col">Net Salary</td>
      <td><a href="{{route('salary.calculate',$data->id)}}" class="btn btn-info">Calculate Total Salary</a></td>
      <td><a href="" class="btn btn-info">Salary Certificate</a></td>
    </tr>


    @endforeach

  </tbody>
</table>
    

@endsection