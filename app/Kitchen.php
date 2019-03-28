<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    //
    protected $fillable = [
        'name', 'description', 'link', 'order','color'
    ];
}
