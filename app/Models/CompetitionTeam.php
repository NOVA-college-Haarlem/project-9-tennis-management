<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetitionTeam extends Model
{
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    // A CompetitionTeam has many Users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
