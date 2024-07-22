<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Cocktails;
use Illuminate\Http\Request;


class CocktailController extends Controller
{
    function show()
    {
        // Query al db
        $cocktails = Cocktails::all();

        return view('welcome', compact('cocktails'));
    }
}
