<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="{{url('/css/login.css')}}" />


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="{{route('do.login')}}" method="post">
       @csrf
       





      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Enter email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Enter password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>