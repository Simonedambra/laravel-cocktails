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
        <div class="container">
            <a href="{{ route('cocktails.index') }}">torna alla home</a>
            <br>
            <a href="{{ route('cocktails.edit', $cocktail) }}">Modifica cocktail</a>
            <hr>
            <h1>{{ $cocktail['name'] }}</h1>
            <p>{{ $cocktail['ingredienti'] }}</p>
        </div>
    </main>
@endsection

@section('footer')
    <footer>
        footer

    </footer>
@endsection
