<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Create Questions</h1>

    <form action="{{ route('show.create') }}" method="POST">

        <label for="category">Category:</label>
        <select 
        name="category"
        required
        value="{{ old('category') }}">
            <option value="cat1">Category 1</option>
            <option value="cat2">Category 2</option>
            <option value="cat3">Category 3</option>
            <option value="cat4">Category 4</option>
            <option value="cat4">Category 5</option>
        </select>

        <label for="category">Question:</label>
        <input 
         type="text" 
         name="question" 
         required
        >

        <button id="questionChoice" onclick="addChoice()">Add Choice</button>

        <script>
            function addChoice() {
                const divEle = document.getElementById("questionChoice");
                divEle.innerHTML += `
                    <input 
                    type="text" 
                    name="choice"
                    required
                    >
                `;
            }
        </script>

        <button type="submit">Create Question</button>

        @if ($errors->any()) 
            <ul>
                @foreach ( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

</body>
</html>