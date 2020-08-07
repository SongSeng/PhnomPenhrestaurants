<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'restaurant_name','restaurant_type', 'restaurant_location', 'restaurant_rating', 'restaurant_decription'
    ];
}