<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LadderRanking extends Model
{
    public function ladder()
    {
        return $this->belongsTo(Ladder::class);
    }

    // A LadderRanking belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
