<!DOCTYPE html>
<html>
<head>
  <title>Add Employee</title>
  <link rel="stylesheet" href="styleform.css">
</head>
<body>

<h3>Enter Employee Details</h3>

<div align="center">
  <form action="{{route('empsave')}}" method="POST">
    @csrf   

    <label id="a">Enter employee Name</label>
    <input type="text" id="fname" name="na" placeholder="Name.."><br>

    <label id="a">Enter employee Email</label>
    <input type="email" id="lname" name="em" placeholder="Email"><br>

    <label id="a">Enter employee Mobile</label>
    <input type="number" id="lname" name="mo" placeholder="Mobile"><br>

    <label id="a">Enter employee Type</label>
    <select name="ty">
    <option>Teacher</option>
    <option>office staff</option>
    <option>vice principal</option>
    <option>Financial Manager</option>
    </select>
<br>
    <label id="a">Enter employee address</label>
    <input type="text" id="lname" name="ad" placeholder="Address"><br>

    <label id="a">Enter employee qualification</label>
    <input type="text" id="lname" name="qa" placeholder="Qualification"><br>

    <label id="a">Enter employee Username</label>
    <input type="email" id="lname" name="us" placeholder="Email ID"><br>

    <label id="a">Enter employee Password</label>
    <input type="password" id="lname" name="pa" placeholder="Employee password"><br>

    <input type="submit" value="Add">
  </form>
</div>

</body>
</html>
