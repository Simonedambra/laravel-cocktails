<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titolo</title>
    @vite('resources/scss/app.scss')

</head>

<body>
    <div class="container">
        <a href="{{ route('cocktails.index') }}">torna alla home</a>
        <br>
        <a href="{{ route('cocktails.edit', $cocktail) }}">Modifica cocktail</a>
        <hr>
        <h1>{{ $cocktail['name'] }}</h1>
        <p>{{ $cocktail['ingredienti'] }}</p>
    </div>
</body>

</html>
