@extends('backend.master')

@section('content')

<form action="{{route('salary.form.store')}}"  method="post">

@csrf



<div class="from-group">
   <label for=""><b>Select Department</b></label>
   <select name="department" id="department" class="form-control">
     @foreach($department as $item)
     <option value="{{$item->id}}">{{$item->name}}</option>
     @endforeach
   </select>
</div>

<div class="from-group">
     <label for=""><b>Select Designation</b></label>
     <select name="designation" id="designation" class= "form-control"> 
          @foreach($designation as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
     </select>
</div>





<div class="form-group">
            <label for="basic salary"><b>Basic Salary</b></label>
            <input required type="number" class="form-control" id="basic salary" name="basic_salary" placeholder="Enter employee basic salary">
</div>

<div class="form-group">
            <label for="house rent"><b>House Rent (%)</b></label>
            <input required type="number" class="form-control" id="house rent" name="house_rent" placeholder="Enter employee house rent">
</div>

<div class="form-group">
            <label for="medical"><b>Medical (%)</b></label>
            <input required type="number" class="form-control" id="medical" name="medical" placeholder="Enter employee medical">
</div>

<div class="form-group">
            <label for="transport"><b>Transport (%)</b></label>
            <input required type="number" class="form-control" id="transport" name="transport" placeholder="Enter employee transport">
</div>


<div class="form-group">
            <button  class="btn btn-primary">Submit</button>
</div>


</form>




@endsection

@section('scripts')
     <script>
          $(document).ready(function () {
          $("#department").on("change",function () {
               var id = $("#department").val();
               // console.log(id);
               if(id){
                    $.ajax({
                         url:"{{route('get.designation')}}",
                         type:"post",
                         data:{id},
                         dataType:"json",
                         success:function (data) {
                              console.log(data);
                              $("#designation").empty()
                              $("#designation").append("<option>Select Designation</option>")
                              $.each(data, function (key, value) {
                                   console.log(value)
                                   $("#designation").append(`<option value="${value.id}">${value.name}</option>`)
                              })
                         }

                    });
               }
          })
     })
     </script>
@endsection