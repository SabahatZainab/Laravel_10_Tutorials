<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>All Users</title>
</head>
<body>

<div class="container"style="text-align: center; padding: 5px;">
    <div class="row">
        <div class="col-6">
            <h3 style="color:brown"><b>Users</b></h3>
            <table class="table table-hover table-bordered table-striped">
            <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Age</th>
                    <th>View</th>
            </thead>
            <tbody>
                @foreach ($data as $id => $user )
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->age}}</td>
                        <td><a href="{{route('user')}}" class="btn btn-danger btn-sm">Back</a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
