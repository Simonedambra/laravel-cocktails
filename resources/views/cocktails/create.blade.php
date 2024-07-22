<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo Cokctail</title>
    @vite('resources/scss/app.scss')

</head>

<body>
    <h1>Creazione nuovo cocktail</h1>
    <div class="container">
        <form action="{{ route('cocktails.store') }}" method="POST">
            @csrf
            {{-- NOME --}}
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="name">
            </div>
            {{-- INGREDIENTI --}}
            <div class="mb-3">
                <label for="ingredienti">Ingredienti:</label>
                <textarea class="form-control" id="ingredienti" style="height: 100px" name='ingredienti'></textarea>
                <div id="emailHelp" class="form-text">Separare gli ingredienti da una ', '</div>

            </div>
            {{-- BASE ALCOLICA --}}
            <div class="mb-3">
                <label for="base-alcolica" class="form-label">Base alcolica:</label>
                <input type="text" class="form-control" id="base-alcolica" name="base_alcolica">
            </div>
            {{-- ORIGINE --}}
            <div class="mb-3">
                <label for="origine" class="form-label">Paese d'origine:</label>
                <input type="text" class="form-control" id="origine" name="paese_di_origine">
            </div>
            {{-- SE è ALCOLICO --}}
            <div class="mb-3">
                <div class="form-label">E' alcolico?</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_alcoholic" id="si_alcol" value="1"
                        checked>
                    <label class="form-check-label" for="si_alcol">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_alcoholic" id="no_alcol" value="0">
                    <label class="form-check-label" for="no_alcol">
                        No
                    </label>
                </div>
            </div>

            {{-- GUSTO --}}
            <div class="mb-3">
                <label for="gusto" class="form-label">Gusto:</label>
                <input type="text" class="form-control" id="gusto" name="flavor">
            </div>
            <button type="submit" class="btn btn-success">Crea nuovo Fumetto</button>
        </form>
    </div>
</body>

</html>
