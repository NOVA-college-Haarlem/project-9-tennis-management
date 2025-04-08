<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = [
        'user_id',
        'specialization',
        'bio',
        'hourly_rate',
        'availability',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lessonBookings()
    {
        return $this->hasMany(LessonBooking::class);
    }
}
