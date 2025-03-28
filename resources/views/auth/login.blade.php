<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <label for="email">Email:</label>
        <input 
         type="email" 
         name="email" 
         required
         value="{{ old('email') }}"
        >

        <label for="password">Password:</label>
        <input 
         type="password" 
         name="password" 
         required
        >

        <button type="submit">Login</button>

        @if ($errors->any()) 
            <ul>
                @foreach ( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

    <a href="{{ route('show.register') }}">Don't have an account yet? Register here</a>
</body>
</html>