<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public function registrations()
    {
        return $this->hasMany(TournamentRegistration::class);
    }

    public function matches()
    {
        return $this->hasMany(TournamentMatch::class);
    }
}
