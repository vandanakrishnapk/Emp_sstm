<!DOCTYPE html>
<html>
<head>
  <title>Employee leave request</title>
  <link rel="stylesheet" href="styleform.css">
</head>
<body>

<h3>Leave Request</h3>

<div align="center">
  
<form action="{{route('saveleave')}}" method="POST">
  @csrf
  <label>Select employee ID</label>
<select name="se" class="form-control" required>
  @foreach($emp as $emps)
    <option value="{{ $emps->id }}">{{$emps->id}}</option>
  @endforeach                 
</select><br>
<label>Enter date</label>
<input type="date" name="da" placeholder="date" required><br>
<input type="submit" value="submit">
</form>
</div>

</body>
</html>
