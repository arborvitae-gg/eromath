<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p>
        Homescreen.
    </p>

    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button>Logout</button>
    </form>

</body>
</html>