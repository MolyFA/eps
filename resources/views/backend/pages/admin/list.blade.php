@extends('backend.master')
@section('content')


<h1> All Employees</h1>
<br>

        <a href="{{url('/admin/create')}}" class="btn btn-success">
        Create Employee
        </a>
    <br>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>A</td>
            <td>Uttara</td>
            <td>A@gmail.com</td>
            <td>01332</td>
            
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>B</td>
            <td>Banani</td>
            <td>B@gmail.com</td>
            <td>01456</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>C</td>
            <td>Mirpur</td>
            <td>C@gmail.com</td>
            <td>01868</td>
        </tr>
        </tbody>
    </table>


@endsection