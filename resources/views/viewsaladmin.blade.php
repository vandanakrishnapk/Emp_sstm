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
            <th>salary_id</th>
            <th>emp_id</th>
            <th>date</th>
            <th>salary amount</th> 
            <th>Action</th>
           </tr>
           @foreach($sal as $sals)
           <tr>
            <td>{{$sals->salary_id}}</td>
            <td>{{$sals->emp_id}}</td>
            <td>{{$sals->date}}</td>
            <td>{{$sals->salary}}</td>
            <td><a href="{{route('editsal',encrypt($sals->id))}}" class="btn btn-primary" role="button">Edit</a></td>
            <td><a href="{{route('deletesal',encrypt($sals->salary_id))}}" class="btn btn-danger" role="button">Delete</td>
           </tr>
           @endforeach
        </table>
    </div>
</body>
</html>