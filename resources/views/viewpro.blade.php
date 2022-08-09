<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View profile</title>
<link rel="stylesheet" href="styletable.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   
</head>
<body>
   
    <div>
        <table class="table table-striped">          
            
<tr>
<th>Employee_id</th>
<td>{{$us->id}}</td>
</tr>
<tr>
<th>Name</th>
<td>{{$us->name}}</td>
</tr> 
<tr>
    <th>Email</th>
    <td>{{$us->email}}</td>
</tr>
<tr>
    <th>Mobile</th>
    <td>{{$us->mobile}}</td>
</tr>
<tr>
    <th>Address</th>
    <td>{{$us->address}}</td>
</tr>
<tr>
    <th>Qualification</th>
    <td>{{$us->qualification}}</td>
</tr>
<tr>
    <th>Username</th>
    <td>{{$us->username}}</td>
</tr>
<tr>
   <th>password</th>
   <td>{{$us->password}}</td>
</tr>  
<tr>
    <td><a href="{{route('editpro',encrypt($us->id))}}" class="btn btn-primary" role="button">Edit profile</a></td>
</tr>        
</table>
</div>

</body>
</html>