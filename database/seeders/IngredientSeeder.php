<?php

namespace Database\Seeders;

use App\Models\ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
   
    public function run(Faker $faker): void
    {

$ingredients=[
    [
        'name'=>'GIN',
        'is_alcolic'=>true,
    ],
    [
        'name'=>'VODKA',
        'is_alcolic'=>true,
    ],
    [
        'name'=>'RUM',
        'is_alcolic'=>true,
    ],
    [
        'name'=>'TONICA',
        'is_alcolic'=>false,
    ],
    [
        'name'=>'REDBULL',
        'is_alcolic'=>false,
    ]
];



        Schema::disableForeignKeyConstraints();
        DB::table('ingredients')->truncate();
        foreach($ingredients as $ingrid){

            $ingredient = new ingredient();

            $ingredient->name= $ingrid['name'];
            $ingredient->is_alcolic =$ingrid['is_alcolic'];
            
            $ingredient->save();
            
        };
        Schema::enableForeignKeyConstraints();
    }
}
