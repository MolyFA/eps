@extends('backend.master')

@section('content')

<form action="{{route('designation.form.store')}}"   method="post">

@csrf


<div class="from-group">
     <label for=""><b>Seletc Department</b></label>
     <select name="department" id="" class="form-control">
          @foreach($department as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
     </select>

</div>

<div class="form-group">
            <label for="name"><b>Name</b></label>
            <input required type="text" class="form-control" id="name" name="user_name" placeholder="Enter Employee desgisnation">
</div>




<div class="form-group">
            <button  class="btn btn-primary">Submit</button>
</div>




</form>






@endsection