
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee Leave</title>
<link rel="stylesheet" href="styletable.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   
</head>
<body>
    <div>
        <table class="table table-striped">
           <tr>
            <th>Slno</th>
            <th>emp_id</th>
            <th>date</th>
           </tr>
           @foreach($leave as $leaves)
           <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$leaves->emp_id}}</td>
            <td>{{$leaves->date}}</td>
           </tr>
           @endforeach
        </table>
    </div>
</body>
</html>