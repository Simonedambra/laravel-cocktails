<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cocktails;
use Illuminate\Http\Request;

class CocktailController extends Controller
{

    public function index()
    {
              // Query al db
        $cocktails = Cocktails::all();

        return view('welcome', compact('cocktails'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {

    }
}
