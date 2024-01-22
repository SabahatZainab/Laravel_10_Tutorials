<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>

            {{-- @foreach ($students as $students ) --}}
            <tr>

                {{$students->id}}
            </tr><br>
            <tr>

                {{$students->name}}
            </tr><br>
            <tr>

                {{$students->email}}
            </tr><br>
            <tr>

                {{$students->cnic}}
            </tr><br>
            <tr>

                {{$students->phone}}
            </tr><br>
            <tr>

                {{$students->gender}}
            </tr><br>
            <tr>

                {{$students->date_of_birth}}
            </tr><br>
            <tr>

                {{$students->current_address}}
            </tr><br>
            <tr>

                {{$students->permanent_address}}
            </tr><br>
            {{-- @endforeach --}}

    </table>
    </body>
</html>
