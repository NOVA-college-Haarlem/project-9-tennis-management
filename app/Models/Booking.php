<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'end_time',
        'status',
        'booking_type',
        'user_id',
        'court_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function court()
    {
        return $this->belongsTo(Court::class, 'court_id');
    }
}

