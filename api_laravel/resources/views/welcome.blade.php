<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Breeds</title>
</head>
<body>
    <div class="container" style="text-align: center; padding:15px; margin:15px;">
        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="button" class="btn btn-outline-primary"><a href="{{route('home')}}">Next</a></button>
            </div>
        </div>
        <h1>Breeds</h1>
        @foreach($breeds as $b)
            <div class="card">
                <div class="card-body">
                    {{$b}}
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
