@extends('backend.master')

@section('content')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Employee Details</h2>

<div class="card">
  <img src="https://us.123rf.com/450wm/captainvector/captainvector1603/captainvector160310553/106674403-employee.jpg" alt="" style="width:100%">
  


  <p class="title"></p>
  <p></p>
  <td>
  <a href="{{route('profile',$data->id)}}" class="">View</a>
  </td>
            
  
</div>

</body>
</html>




@endsection