<!DOCTYPE html>
<html>
<head>
  <title>Leave request</title>
  <link rel="stylesheet" href="styleform.css">
</head>
<body>

<h3>Leave Request</h3>

<div align="center">
  
<form>
  @csrf
  <label>Select employee ID</label>
<select name="se" class="form-control" required>
  @foreach($emp as $emps)
    <option value="{{ $emps->id }}">{{$emps->id}}</option>
  @endforeach                 
</select><br>
<label>Enter date</label>
<input type="date" name="da" placeholder="date" required><br>
<label>Enter salary</label>
<input type="number" name="sa" placeholder="amount here" required><br>
<input type="submit" value="submit">
</form>
</div>

</body>
</html>
