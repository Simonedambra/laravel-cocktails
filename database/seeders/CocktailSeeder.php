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
            $cocktail->paese_di_origine=$faker->state();
            $cocktail->flavor=$faker->title();
           

            $cocktail->save();
        };

        }
    }

