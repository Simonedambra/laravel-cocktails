<?php

namespace Database\Seeders;

use App\Models\CockTails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $cocktail = new CockTails();

             //   Azienda
            $$cocktail->increment();
            //   Stazione di partenza
            $$cocktail-> =;
            //   Stazione di arrivo
            $$cocktail-> =;
            //   Orario di partenza
            $$cocktail-> = ;
            //   Orario di arrivo
            $$cocktail-> = ;
            //   Codice Treno
            $$cocktail-> =;
            //   Numero Carrozze
            $$cocktail-> = ;
            
       
            $train->save();
        }
    }
}
