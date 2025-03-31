<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    public function teams()
    {
        return $this->hasMany(CompetitionTeam::class);
    }

    // A Competition has many CompetitionMatches
    public function matches()
    {
        return $this->hasMany(CompetitionMatch::class);
    }
}
