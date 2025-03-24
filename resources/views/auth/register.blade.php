<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input 
         type="text" 
         name="name" 
         required
         value="{{ old('name') }}"
        >

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

        <label for="password_confirmation">Confirm Password:</label>
        <input 
         type="password" 
         name="password_confirmation" 
         required
        >

        <button type="submit">Register</button>

        @if ($errors->any()) 
            <ul>
                @foreach ( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

    <a href="{{ route('show.login') }}">Already have an account? Login here</a>
</body>
</html>