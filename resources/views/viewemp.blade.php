<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
<link rel="stylesheet" href="styletable.css">
   
</head>
<body>
    <div>
        <table>
            <tr>
                <th>Employee Name </th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Role</th>
                <th>Address</th>
                <th>Qualification</th>
                <th cols=2>Action</th>
            </tr>
            @foreach($emp as $emps)
            <tr>
                <td>{{$emps->name}}</td>
                <td>{{$emps->email}}</td>
                <td>{{$emps->mobile}}</td>
                <td>{{$emps->type}}</td>
                <td>{{$emps->address}}</td>
                <td>{{$emps->qualification}}</td>
                <td>Delete</td>
                <td>Edit</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>