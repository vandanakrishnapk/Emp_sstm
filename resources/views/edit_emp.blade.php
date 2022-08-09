<!DOCTYPE html>
<html>
<head>
  <title>Edit employee</title>
  <link rel="stylesheet" href="styleform.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div>
  <form action="{{route('update_emp')}}" method="POST">
    @csrf   
    <input type="hidden" name="u_id" value="{{$emp->id}}">
    <label id="a">Enter employee Name</label>
    <input type="text" id="fname" name="na" value="{{$emp->name}}" aplaceholder="Name.."><br>

    <label id="a">Enter employee Email</label>
    <input type="email" id="lname" name="em" value="{{$emp->email}}" placeholder="Email"><br>

    <label id="a">Enter employee Mobile</label>
    <input type="number" id="lname" name="mo" value="{{$emp->mobile}}" placeholder="Mobile"><br>

    <label id="a">Enter employee Type</label>
    <select name="ty">
    <option value="{{$emp->type}}">Teacher</option>
    <option value="{{$emp->type}}">office staff</option>
    <option value="{{$emp->type}}">vice principal</option>
    <option value="{{$emp->type}}">Financial Manager</option>
    </select>
<br>
    <label id="a">Enter employee address</label>
    <input type="text" id="lname" name="ad" value="{{$emp->address}}" placeholder="Address"><br>

    <label id="a">Enter employee qualification</label>
    <input type="text" id="lname" name="qa" value="{{$emp->qualification}}" placeholder="Qualification"><br>

    <label id="a">Enter employee Username</label>
    <input type="email" id="lname" name="us" value="{{$emp->username}}" placeholder="Email ID"><br>

    <label id="a">Enter employee Password</label>
    <input type="password" id="lname" name="pa" value="{{$emp->password}}" placeholder="Employee password"><br>

    <input type="submit" value="Add">
  </form>
</div>

</body>
</html>
