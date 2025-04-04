<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonBooking extends Model
{
    protected $fillable = [
        'user_id',
        'lesson_id',
        'coach_id',
        'status',
        'start_time',
        'end_time',
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    // A LessonBooking belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function court()
    {
        return $this->belongsTo(Court::class);
    }
}
