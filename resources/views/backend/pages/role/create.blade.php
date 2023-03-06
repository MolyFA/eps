@extends('backend.master')

@section('content')

<div class="container mt-5">
     <form action="{{route('role.store')}}" method="post">
          @csrf
          <div class="form-group">
               <label for="name">Role Name</label>
               <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Role Name" name="roleName" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
     </form>
</div>
@endsection