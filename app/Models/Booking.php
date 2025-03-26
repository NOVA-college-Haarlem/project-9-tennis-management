<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'start_time',
        'end_time',
        'status',
        'booking_type',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function court()
    // {
    //     return $this->belongsTo(Court::class);
    // }
}
