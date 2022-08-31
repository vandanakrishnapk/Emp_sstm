<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <title>Give work</title>
</head>
<body>
    <form action="{{route('savework')}}" method="POST">
        @csrf
        @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
@endif
        <div>
            <label>Enter work</label><br>
            <input type="text" name="wo" placeholder="work here" required><br>
            <input type="submit" value="Add work">
        </div>
    </form>
</body>
</html>