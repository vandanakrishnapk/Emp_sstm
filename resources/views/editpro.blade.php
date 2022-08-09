<!DOCTYPE html>
<html>
<head>
  <title>Edit employee</title>
  <link rel="stylesheet" href="styleform.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div>
  <form action="{{route('updatepro')}}" method="POST">
    @csrf   
    <input type="hidden" name="u_id" value="{{$pro->id}}">
    <label id="a">Enter employee Name</label>
    <input type="text" id="fname" name="na" value="{{$pro->name}}" aplaceholder="Name.."><br>

    <label id="a">Enter employee Email</label>
    <input type="email" id="lname" name="em" value="{{$pro->email}}" placeholder="Email"><br>

    <label id="a">Enter employee Mobile</label>
    <input type="number" id="lname" name="mo" value="{{$pro->mobile}}" placeholder="Mobile"><br>

    <label id="a">Enter employee Type</label>
    <select name="ty">
    <option value="{{$pro->type}}">salesmanager</option>
    <option value="{{$pro->type}}">project engineer</option>
    <option value="{{$pro->type}}">financial manager</option>
    <option value="{{$pro->type}}">site engineer</option>
    </select>
<br>
    <label id="a">Enter employee address</label>
    <input type="text" id="lname" name="ad" value="{{$pro->address}}" placeholder="Address"><br>

    <label id="a">Enter employee qualification</label>
    <input type="text" id="lname" name="qa" value="{{$pro->qualification}}" placeholder="Qualification"><br>

    <label id="a">Enter employee Username</label>
    <input type="email" id="lname" name="us" value="{{$pro->username}}" placeholder="Email ID"><br>

    <label id="a">Enter employee Password</label>
    <input type="password" id="lname" name="pa" value="{{$pro->password}}" placeholder="Employee password"><br>

  <input type="submit" value="Update">
  </form>
</div>

</body>
</html>
