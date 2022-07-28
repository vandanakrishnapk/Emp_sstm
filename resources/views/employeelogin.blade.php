<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Employee Login
  </title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>



<form action="{{route('empdologin')}}" method="POST">
@csrf
    <div>
        <h1>Login</h1>
</div>

  <div class="form-field">
    <input type="email" name="empname" placeholder="Email / Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="emppassword" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <button type="submit" class="btn" >Log in</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>