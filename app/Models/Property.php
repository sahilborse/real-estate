<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $fillable = [
        'name', 'type', 'price', 'area_sqft', 'address', 'description', 'image_path'
    ];
}
