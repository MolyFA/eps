@extends('backend.master')

@section('content')

<form action="{{route('leavetype.update',$leavetype->id)}}"  method="post">

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
            <input required type="text" class="form-control" id="tittle" name="tittle" placeholder="Enter leavetype tittle"  value="{{$leavetype->tittle}}">
</div>


<div class="form-group">
            <button  class="btn btn-primary">Update</button>
        </div>






</form>




@endsection