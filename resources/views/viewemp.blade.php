<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
<link rel="stylesheet" href="styletable.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   
</head>
<body>
    <div>
        <table class="table table-striped">
            <tr>
                <th>Employee_Name </th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Role</th>
                <th>Address</th>
                <th>Qualification</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach($emp as $emps)
            <tr>
                <td>{{$emps->name}}</td>
                <td>{{$emps->email}}</td>
                <td>{{$emps->mobile}}</td>
                <td>{{$emps->type}}</td>
                <td>{{$emps->address}}</td>
                <td>{{$emps->qualification}}</td>
                <td><a class="btn btn-danger" role="button" href="{{route('delete_emp',encrypt($emps->id))}}">Delete</a></td>
                <td><a class="btn btn-primary" role="button" href="{{route('edit_emp',encrypt($emps->id))}}">Edit</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>