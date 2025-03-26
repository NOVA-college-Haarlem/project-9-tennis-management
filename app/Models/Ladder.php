<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ladder extends Model
{
    public function rankings()
    {
        return $this->hasMany(LadderRanking::class);
    }

    // A Ladder has many LadderChallenges
    public function challenges()
    {
        return $this->hasMany(LadderChallenge::class);
    }
}
