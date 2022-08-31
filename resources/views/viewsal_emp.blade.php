<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee Salary</title>
<link rel="stylesheet" href="styletable.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   
</head>
<body>
    <div>
        <table class="table table-striped">
           <tr>
            
            <th>emp_id</th>
            <th>date</th>
            <th>name</th>
            <th>mobile</th>
            <th>salary amount</th> 
           </tr>
           @foreach($usr as $usrs)
           <tr>
            <td>{{$usrs->emp_id}}</td> 
            <td>{{$usrs->date}}</td>
            <td>{{$usrs->name}}</td>
            <td>{{$usrs->mobile}}</td>
            <td>{{$usrs->salary}}</td>
           </tr>
           @endforeach
        </table>
    </div>
</body>
</html>