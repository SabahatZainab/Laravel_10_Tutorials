<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>All Users</title>
    <style>
        /* nav .w-5{
            display: none;
        } */
    </style>
</head>
<body>

<div class="container"style="padding: 5px;">
    <div class="row">
        <div class="col-6">
            <h3 style="color:brown;text-align: center;"><b>Users</b></h3>
            <a href="/newuser" class="btn btn-success btn-sm mb-3" style="text-align: left; padding: 5px;">Add User</a>
            <table class="table table-hover table-bordered table-striped">
            <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Age</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Update</th>
            </thead>
            <tbody>
                @foreach ($data as $id => $user )
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->age}}</td>
                        <td><a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        <td><a href="{{route('update.page',$user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                        <td><a href="{{route('delete.user',$user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            <div class="mt-5">
                {{$data->links()}}
                {{-- {{$data->links('pagination::bootstrap-5')}} --}}
            </div>
            <div>
                {{-- Total Users: {{$data->total()}} <br>
                Current Page: {{$data->currentPage()}} --}}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
