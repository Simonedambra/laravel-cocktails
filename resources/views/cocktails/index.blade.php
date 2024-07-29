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
            <ul class="list-group py-4 ">
                @foreach ($cocktails as $cocktail)
                    <li class="list-group-item"><a href="{{ route('cocktails.show', $cocktail->$id) }}">{{ $cocktail->name }}
                            |
                            {{ $cocktail->ingredienti }}</a></li>
                @endforeach
            </ul>
            <hr>
            <a href="{{ route('cocktails.create') }}">Crea nuovo coktail</a>

        </div>
    </main>
@endsection

@section('footer')
    <footer>
        footer

    </footer>
@endsection
