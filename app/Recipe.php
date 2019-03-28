<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // all mass-fillable
    protected $fillable = [
        'title', 'title_sm', 'image', 'post','prep', 'cook', 'ingredients', 'instructions', 'type'
    ];
}
