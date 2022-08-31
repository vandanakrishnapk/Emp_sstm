
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View leave hr</title>
<link rel="stylesheet" href="styletable.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   
</head>
<body>
    <div>
        <table class="table table-striped">
           <tr>
            <th>emp_id</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>date</th>
           </tr>
        @foreach($hr as $hrs)
          <tr>   
            <td>{{$hrs->emp_id}}</td>
            <td>{{$emps[0]->name}}
            <td>{{$emps[0]->mobile}}</td>   
            <td>{{$hrs->date}}</td>
           </tr>
       @endforeach
        </table>
    </div> 
</html>