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
        'allow_guests',
    ];
}
