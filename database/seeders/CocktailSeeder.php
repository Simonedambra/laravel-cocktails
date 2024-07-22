<?php

namespace Database\Seeders;

use App\Models\Cocktails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CocktailSeeder extends Seeder
{

    public function run(faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $cocktail = new Cocktails();

            
            $cocktail->name= $faker->name();
            $cocktail->ingredienti = '1 bt. di Aperol (100 cl),2 bt. di Prosecco (75 cl)';
            $cocktail->base_alcolica= $faker->title();
            $cocktail->paese_di_origine=$faker->state();
            $cocktail->is_alcoholic=$faker->boolean();
            $cocktail->flavor=$faker->title();
           

            $cocktail->save();
        };

        }
    }

