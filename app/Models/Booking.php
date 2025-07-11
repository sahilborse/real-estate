<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class Booking extends Model
{
    //
    protected $fillable = ['property_id', 'name', 'email', 'phone', 'preferred_datetime'];

    
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
