<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista cocktails</title>
    @vite('resources/scss/app.scss')

</head>

<body>
    <main>
        <div class="container">
            <ul class="list-group py-4 ">
                @foreach ($cocktails as $cocktail)
                    <li class="list-group-item"><a href="{{ route('cocktails.show', $cocktail) }}">{{ $cocktail->name }} |
                            {{ $cocktail->ingredienti }}</a></li>
                @endforeach
            </ul>
            <hr>
            <a href="{{ route('cocktails.create') }}">Crea nuovo coktail</a>

        </div>

    </main>
</body>

</html>
