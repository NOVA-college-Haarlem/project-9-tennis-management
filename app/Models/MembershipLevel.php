<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipLevel extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'max_booking_days_ahead',
        'max_booking_hours',
        'allow_guests',
        'access_competitions',
    ];
}
