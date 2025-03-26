<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TournamentMatch extends Model
{
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
