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
        <div class="py-5 text-center">
            <a href="{{ route('cocktails.create') }}">&rarr; Aggiungi un nuovo Cocktail &larr;</a>
        </div>

        @if (@session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
        
            <main>
                <div class="container d-flex flex-wrap justify-content-center">
                   @foreach ($cocktails as $cocktail)
                       <div class="bg-gray gap-1 p-4 m-3">
                           <a href="{{ route('cocktails.show', $cocktail)}}">
                               <h2 class="text-center">{{ $cocktail->name }}</h2>
                           </a>
                           <p>{{ $cocktail->ingredienti }}</p>
                           <h4>{{ $cocktail->base_alcolica }}</h4>
                           <h4>{{ $cocktail->paese_di_origine }}</h4>
                           <h4>{{ $cocktail->is_alcoholic }}</h4>
                           <h4>{{ $cocktail->flavor }}</h4>
                       </div>
                   @endforeach
               </div> 
               <ul>

    </main>
@endsection

@section('footer')
    {{-- <footer>
        
        footer

    </footer> --}}
@endsection
