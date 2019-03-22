<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // all mass-fillable
    protected $fillable = [
        'type'
    ];
}
