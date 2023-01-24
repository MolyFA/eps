@extends('backend.master')

@section('content')


<form action="{{route('leaveapply.form.store')}}"  method="post">

@csrf



<div class="form-group">
            <label for=""><b>Select Employee</b></label>
            <select name="employee" id="" class="form-control">
                @foreach($employee as $item)
            <option value="{{$item->id}}">{{$item->name }}</option>
            @endforeach

        </select>
        </div>


<div class="form-group">
            <label for="tittle"><b>Tittle</b></label>
            <input type="text" class="form-control" id="tittle" name="leaveapply_tittle" placeholder="Enter leaveapply tittle">
        </div>

        <div class="form-group">
            <label for="letter"><b>Letter</b></label>
            <input type="text" class="form-control" id="letter" name="leaveapply_letter" placeholder="Enter leaveapply letter">
        </div>

        <div class="form-group">
            <label for="leave"><b>Leave</b></label>
            <input type="text" class="form-control" id="leave" name="leave" placeholder="Enter leave">
        </div>


        <div class="form-group">
            <button  class="btn btn-primary">Submit</button>
        </div>












</form>











@endsection