@extends('backend.master')

@section('content')

@php
use Carbon\Carbon;
$carbon = new Carbon();
@endphp

<h1>Attendance Report</h1>
<button onclick="window.print(); return false;" class="btn btn-primary">Print</button>

<form action="{{route('attendance.report.search')}}" method="get">

<div class="row">
    <div class="col-md-3">
        <label for="">From date:</label>
        <input name="from_date" type="date" class="form-control">
    </div>
    <div class="col-md-3">
        <label for="">To date:</label>
        <input name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-3">
        <label for="">Employee</label>
        <select name="user_id" id="" class="form-control">
          @foreach($users as $data)
          <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
    
</div>
</form>
<table class="table mt-5">
     <thead>
          <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Working Hour</th>
               <th scope="col">Checkin Time</th>
               <th scope="col">Checkout Time</th>
               <th scope="col">Status</th>
          </tr>
     </thead>
     <tbody>
     @foreach($attendance as $key=>$data)
     @php
     $start_time  = $carbon->parse($data->checkin_time);
     $end_time  = $carbon->parse($data->checkout_time);
     @endphp
          <tr>
               <th scope="row">{{$key + 1}}</th>
               <td>{{$data->user->name}}</td>
               <td>{{$start_time->diff($end_time)->format('%H:%I')}} h</td>
               <td>{{$data->checkin_time}}</td>
               <td>{{$data->checkout_time}}</td>
               <td>{{$data->status}}</td>
          </tr>
     @endforeach
     </tbody>
</table>
@endsection