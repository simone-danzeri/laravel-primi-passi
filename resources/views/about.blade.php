<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>Ciao io sono {{ $name }}</h1>
    <p>mi trovi qui: </p>
    <ul>
        @foreach ($infos as $key => $info)
            <li>{{$key}} : {{$info}} </li>
        @endforeach
    </ul>
</body>
</html>
