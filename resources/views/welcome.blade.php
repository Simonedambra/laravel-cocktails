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
        <!-- <div class="container d-flex flex-wrap justify-content-center">
                @foreach ($cocktails as $cocktail)
    <div class="bg-gray gap-1 p-4 m-3">
                        <h2>{{ $cocktail->name }}</h2>
                        <p>{{ $cocktail->ingredienti }}</p>
                        <h4>{{ $cocktail->base_alcolica }}</h4>
                        <h4>{{ $cocktail->paese_di_origine }}</h4>
                        <h4>{{ $cocktail->is_alcoholic }}</h4>
                        <h4>{{ $cocktail->flavor }}</h4>

                    </div>
    @endforeach
            </div> -->
        <ul>
            @foreach ($cocktails as $cocktail)
                <li><a href="">{{ $cocktail->name }}</a></li>
            @endforeach
        </ul>
    </main>
@endsection

@section('footer')
    <footer>
        footer

    </footer>
@endsection
