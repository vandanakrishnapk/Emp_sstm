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
           </tr>
           @foreach($emp as $emps)
           <tr>
            <td>{{$emps->salary_id}}</td>
            <td>{{$emps->emp_id}}</td>
            <td>{{$emps->date}}</td>
            <td>{{$emps->salary}}</td>
           </tr>
           @endforeach
        </table>
    </div>
</body>
</html>