<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login
  </title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>



<form action="{{route('dologin')}}" method="POST">
@csrf
    <div>
        <h1>Login</h1>
    </div>
    @if(session()->has('message'))
          <h2>{{session()->get('message')}}</h2>
          @endif
   

  <div class="form-field">
    <input type="email" name="adminname" placeholder="Email / Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="adminpassword" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <button type="submit" class="btn" >Log in</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>