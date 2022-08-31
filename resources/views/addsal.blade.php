<!DOCTYPE html>
<html>
<head>
  <title>Add Salary</title>
  <link rel="stylesheet" href="styleform.css">
</head>
<body>

<h3>Enter Salary</h3>

<div align="center">
  
<form action="{{route('salsave')}}" method="POST">
  @csrf
  @if(Session::has('message'))
    <div class="alert alert-warning">
        {{Session::get('message')}}
    </div>
@endif
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
