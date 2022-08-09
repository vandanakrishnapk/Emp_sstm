<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styletable.css">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <tr>
           
            <th>date</th>
            <th>work</th>
            <th>start_time</th>
            <th>end_time</th>
            <th>status</th>
        </tr>
        @foreach($work as $works)
        <tr>
      
        <td>{{$works->date}}</td>
        <td>{{$works->work}}</td>
        <td>{{$works->start_time}}</td>
        <td>{{$works->end_time}}</td>
        <td>{{$works->status}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>