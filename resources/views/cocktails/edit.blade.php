@extends('layouts.app')


@section('title-cocktail')
    cocktail-list
@endsection

@section('header')
    <header class="head d-flex justify-content-center">
        <h1 class="color-white">cocktails</h1class=color-white>
    </header>
@endsection

@section('main')
    <main>
        <h1>Modifica cocktail</h1>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('cocktails.update', $cocktail) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- NOME --}}
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="name"
                        value="{{ old('name', $cocktail->name) }}">
                </div>
                {{-- INGREDIENTI --}}
                <div class="mb-3">
                    <label for="ingredienti">Ingredienti:</label>
                    <textarea class="form-control" id="ingredienti" style="height: 100px" name='ingredienti'>{{ old('name', $cocktail->ingredienti) }}</textarea>
                    <div id="emailHelp" class="form-text">Separare gli ingredienti da una ', '</div>

                </div>
                {{-- BASE ALCOLICA --}}
                <div class="mb-3">
                    <label for="base-alcolica" class="form-label">Base alcolica:</label>
                    <input type="text" class="form-control" id="base-alcolica" name="base_alcolica"
                        value="{{ old('base_alcolica', $cocktail->base_alcolica) }}">
                </div>
                {{-- ORIGINE --}}
                <div class="mb-3">
                    <label for="origine" class="form-label">Paese d'origine:</label>
                    <input type="text" class="form-control" id="origine" name="paese_di_origine"
                        value="{{ old('paese_di_origine', $cocktail->paese_di_origine) }}">
                </div>
                {{-- SE è ALCOLICO --}}
                <div class="mb-3">
                    <div class="form-label">alcolico?</div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_alcoholic" id="si_alcol" value="1"
                            @if ($cocktail->is_alcoholic) checked @endif>
                        <label class="form-check-label" for="si_alcol">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_alcoholic" id="no_alcol" value="0"
                            @if (!$cocktail->is_alcoholic) checked @endif>
                        <label class="form-check-label" for="no_alcol">
                            No
                        </label>
                    </div>
                </div>

                {{-- GUSTO --}}
                <div class="mb-3">
                    <label for="gusto" class="form-label">Gusto:</label>
                    <input type="text" class="form-control" id="gusto" name="flavor"
                        value="{{ old('flavor', $cocktail->flavor) }}">
                </div>
                <button type="submit" class="btn btn-success">Salva modifiche cocktail</button>
            </form>
        </div>
    </main>
@endsection

@section('footer')
    {{-- <footer>
        footer

    </footer> --}}
@endsection
