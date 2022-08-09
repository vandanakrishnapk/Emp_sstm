<!DOCTYPE html>
<html>
<head>
  <title>create worksheet</title>
  <link rel="stylesheet" href="styleform.css">
</head>
<body>

<h3>Add worksheet update</h3>

<div align="center">
  
<form action="{{route('saveworksheet')}}" method="POST">
@csrf
<label>Today date</label>
<input type="date" name="da" placeholder="date here" required><br>
<label>Enter Work</label>
<select name="sel">
  @foreach($work as $works)
  <option value="{{$works->work}}">{{$works->work}}</option>
  @endforeach
</select><br>
<label>Enter start time</label>
<input type="time" name="st" placeholder="date and time" required><br><br><br>
<label>Enter end time</label>
<input type="time" name="et" placeholder="date and time" required><br>
<label>&nbsp;&nbsp;Enter status completed or not </label>
<input type="radio" name="con" value="completed">
<label>completed</label>
<input type="radio" name="con" value="Not completed">
<label>Not completed</label><br>
<input type="submit" value="submit">
</form>
</div>

</body>
</html>