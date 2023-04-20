@extends('backend.master')

@section('content')


<form action="{{route('leaveapply.form.store')}}"  method="post">

@csrf



<div class="form-group">
   
   
            <label for=""><b>Select Employee</b></label>
            
            <select name="employee" id="" class="form-control">
                @foreach($employee as $item)
               
            <option value="{{$item->id}}">{{$item->user->name }}</option>
           @endforeach
            

        </select>
        </div>
        

        <div class="form-group">
            <label for="date"><b>Date</b></label>
            <input required type="date" class="form-control" id="date" name="leaveapply_date" placeholder="Enter leaveapply date">
        </div>


       <div class="form-group">
            <label for="tittle"><b>Tittle</b></label>
            <input required type="text" class="form-control" id="tittle" name="leaveapply_tittle" placeholder="Enter leaveapply tittle">
        </div>

        <div class="form-group">
            <label for="letter"><b>Letter</b></label>
            <input required type="text" class="form-control" id="letter" name="leaveapply_letter" placeholder="Enter leaveapply letter">
        </div>



        <div class="form-group">
            <label for=""><b>Select LeaveType</b></label>
            <select id="leavetype_id" name="leavetype_id" class="form-control">
                @foreach($leavetype_list as $item)
            <option id="leavetype_id" name="leavetype_id" value="{{$item->id}}">{{$item->tittle }}</option>
            @endforeach
        </select>
        </div>


        <div class="form-group">
            <button  class="btn btn-primary">Submit</button>
        </div>












</form>











@endsection