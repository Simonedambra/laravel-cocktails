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
         <div class="container text-center py-5">

            <div>
                <h1>Benvenuto nel nostro eBar</h1>
                <a  href="{{route('cocktails.index')}}">
                    <button 
                        class="btn btn-success"
                        >Guarda il menù</button>
                </a>
            </div>

        </div> 
        <ul>
         {{-- @foreach ($cocktails as $cocktail)
            <li><a>{{ $cocktail->name }}</a></li>
        </ul>
        @endforeach --}}
    </main>
@endsection

