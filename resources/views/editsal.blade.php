<!DOCTYPE html>
<html>
<head>
  <title>Edit Salary</title>
  <link rel="stylesheet" href="styleform.css">
</head>
<body>

<h3>Salary sheet</h3>

<div align="center">
  
<form action="{{route('updatesal')}}" method="POST">
@csrf
<input type="hidden" name="u_id" value="{{$sal->salary_id}}">
<label>Enter date</label>
<input type="date" name="da" placeholder="date" value="{{$sal->date}}" required ><br>
<label>Enter salary</label>
<input type="number" name="sa" placeholder="amount here"value="{{$sal->salary}}" required><br>
<input type="submit" value="submit">
</form>
</div>

</body>
</html>
