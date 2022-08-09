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
        <table>
           <tr>
            <th>Employee_id</th>
            <th>Date</th>
            <th>Salary</th>
            <th colspan="2">Action</th>            
           </tr>
           <tr>
           <td>{{$emp[0]->emp_id}}</td>
           <td>{{$emp[0]->date}}</td>           
            <td>{{$emp[0]->salary}}</td>
           </tr>
        </table>
    </div>
</body>
</html>