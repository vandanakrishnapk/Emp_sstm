<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View salary</title>
<link rel="stylesheet" href="styletable.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   
</head>
<body>
    <div>
        <table class="table table-striped">
           <tr>
            <th>Employee_id</th>
            <th>Date</th>
            <th>name</th>
            <th>mobileno</th>
            <th>Salary</th>         
           </tr>
           @foreach($emp as $emps)
           <tr>
           <td>{{$emps->emp_id}}</td>
           <td>{{$em->name}}</td>
            <td>{{$em->mobile}}</td>
           <td>{{$emps->date}}</td>           
            <td>{{$emps->salary}}</td>
           </tr>
           @endforeach
        </table>
    </div>
</body>
</html>