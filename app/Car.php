<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['model', 'marka', 'year', 'body_type', 'capacity', 'color', 'price'];
}
