@extends('layouts.app')


@section('title-cocktail')
    cocktail-list
@endsection

@section('header')
    <header class="head">
        cocktais
    </header>
@endsection

@section('main')
    <main>
        @foreach ($cocktais as $cocktail)
            <div>

            </div>
        @endforeach


    </main>
@endsection

@section('footer')
    <footer>
        footer

    </footer>
@endsection
