@extends('backend.master')

@section('content')

<form action="{{route('payment.form.store')}}"  method="post" >


@csrf

      <div class="form-group"> 
            <label for=""><b>Select Employee</b></label>

            <select id="employee_id" name="employee_id" class="form-control">
                @foreach($employee as $item)
            <option id="employee_id" name="employee_id" value="{{$item->id}}">{{$item->user->name }}</option>
            @endforeach
        </select>
        </div>
        

        <div class="form-group">
            <label for="date"><b>Date</b></label>
            <input type="date" class="form-control" id="date" name="date" placeholder="Enter Payment date">
        </div>
        <div class="form-group">
            <label for="deduction salary"><b>Deduction_Salary</b></label>
            <input type="number" class="form-control" id="deduction salary" name="deduction salary" placeholder="Enter Deduction salary">
        </div>
        <div class="form-group">
            <label for="bonus"><b>Bonus</b></label>
            <input type="number" class="form-control" id="bonus" name="bonus" placeholder="Enter bonus">
        </div>
        
        <div class="form-group">
            <label for="total amount"><b>Total_Amount</b></label>
            <input type="number" class="form-control" id="total amount" name="total amount" placeholder="Enter total amount">
        </div>



        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>



</form>





@endsection

