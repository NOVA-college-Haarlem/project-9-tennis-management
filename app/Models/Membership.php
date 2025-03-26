<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'user_id',
        'membership_level_id',
        'start_date',
        'end_date',
        'active',
        'balance',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function membershipLevel()
    {
        return $this->belongsTo(MembershipLevel::class);
    }
}
