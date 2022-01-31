<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [

        'title',
        'subtitle',
        'author',
        'date_release'

    ];
}
