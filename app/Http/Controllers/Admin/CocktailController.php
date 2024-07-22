<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCocktailsRequest;
use App\Http\Requests\UpdateCocktailsRequest;
use App\Models\Cocktails;
use Illuminate\Http\Request;

class CocktailController extends Controller
{

    public function index()
    {
        // Query al db
        $cocktails = Cocktails::all();

        return view('cocktails.index', compact('cocktails'));
    }


    public function create()
    {
        return view('cocktails.create');
    }


    public function store(StoreCocktailsRequest $request)
    {
        $data = $request->validated();
        $data['is_alcoholic'] = (intval($data['is_alcoholic']));
        $cocktail = new Cocktails();
        $cocktail->fill($data);
        $cocktail->save();

        return redirect()->route('cocktails.show', $cocktail);
    }


    public function show(Cocktails $cocktail)
    {
        return view('cocktails.show', compact('cocktail'));
    }


    public function edit(Cocktails $cocktail)
    {
        return view('cocktails.edit', compact('cocktail'));
    }


    public function update(UpdateCocktailsRequest $request, Cocktails $cocktail)
    {
        $data = $request->validated();
        $data['is_alcoholic'] = (intval($data['is_alcoholic']));
        $cocktail->update($data);
        return redirect()->route('cocktails.show', $cocktail);
    }


    public function destroy(string $id)
    {
    }
}
