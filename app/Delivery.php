<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'first_name', 'last_name',
        'mobile_number', 'email',
        'city', 'area_name', 'street_name'
    ];

}
