<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CocktailController;
use App\Models\Cocktails;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $cocktails = Cocktails::all();

    return view('welcome', compact('cocktails'));
});


Route::resource('cocktails', CocktailController::class);
