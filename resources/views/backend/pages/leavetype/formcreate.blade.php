@extends('backend.master')

@section('content')


<form action="{{route('leavetype.form.store')}}"  method="post">


@csrf

<div class="form-group">
            <label for="tittle"><b>Tittle</b></label>
            <input required type="text" class="form-control" id="tittle" name="tittle" placeholder="Enter  tittle">
</div>


<div class="form-group">
            <button  class="btn btn-primary">Submit</button>
 </div>
        




</form>






@endsection