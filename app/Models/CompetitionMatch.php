<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetitionMatch extends Model
{
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
