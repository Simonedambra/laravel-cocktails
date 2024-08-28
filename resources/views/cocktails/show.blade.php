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
            <div class="d-flex justify-content-between px-5 py-3">
                <a href="{{ route('cocktails.index') }}">&rarr; Torna alla Home &larr;</a>
               
                <a href="{{ route('cocktails.edit', $cocktail) }}">&rarr; Modifica Cocktail &larr;</a>

                <form action="{{route('cocktails.destroy', $cocktail) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="text-center">
                        <button class="btn btn-danger">Delete</button>
                    </div>
                  </form>
            </div>
            <hr>
            <h1 class="text-center">{{ $cocktail['name'] }}</h1>
            <p class="py-3">{{ $cocktail['ingredienti'] }}</p>
        </div>
    </main>
@endsection


