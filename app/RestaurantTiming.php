<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantTiming extends Model
{
    protected $fillable = [
        'day_of_week', 'from_time', 'to_time'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
