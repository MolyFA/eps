@extends('backend.master')

@section('content')

<div class="container mt-5">
     
     <form action="{{route('user.store')}}" method="post">
          @csrf
          <div class="form-group">
               <label for="name">User Name</label>
               <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required>
          </div>
          <div class="form-group">
               <label for="role_id">User Role</label>
               <select name="role_id" id="role_id" class="form-control" required>
                    @foreach($roles as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
               </select>
          </div>
          <div class="form-group">
               <label for="email">User Email</label>
               <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email" name="userEmail" required autocomplete="off">
          </div>
          <div class="form-group">
               <label for="password">User Password</label>
               <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter User Password" name="userPass" required autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
     </form>
</div>
@endsection