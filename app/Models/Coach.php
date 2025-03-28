<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    public function lessonBookings()
    {
        return $this->hasMany(LessonBooking::class);
    }
}
