<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ingredient extends Model
{
    public function cocktails()
    {
        return $this->belongsToMany(Cocktails::class);
    }
}