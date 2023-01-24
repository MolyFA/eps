@extends('backend.master')

@section('content')


<form action="{{route('leaveapply.update',$leaveapply->id)}}"  method="post">

@method('put')

     @if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

            @if(session()->has('message'))
                <p class="alert alert-success">{{session()->get('message')}}</p>
            @endif



@csrf

<div class="form-group">
            <label for="tittle"><b>Tittle</b></label>
            <input type="text" class="form-control" id="tittle" name="leaveapply_tittle" placeholder="Enter leaveapply tittle"  value="{{$leaveapply->tittle}}">
        </div>

        <div class="form-group">
            <label for="letter"><b>Letter</b></label>
            <input type="text" class="form-control" id="letter" name="leaveapply_letter" placeholder="Enter leaveapply letter" value="{{$leaveapply->letter}}" >
        </div>

        <div class="form-group">
            <label for="leave"><b>Leave</b></label>
            <input type="text" class="form-control" id="leave" name="leave" placeholder="Enter leave"  value="{{$leaveapply->leave}}" >
        </div>


        <div class="form-group">
            <button  class="btn btn-primary">Update</button>
        </div>












</form>











@endsection