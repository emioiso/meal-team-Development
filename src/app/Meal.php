<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
    'name',
    'Ingredients_Memo',
    'way',
    'cost',
    'difficulty',
    'satiety',
    ];  
}
