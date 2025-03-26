<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LadderChallenge extends Model
{
    public function ladder()
    {
        return $this->belongsTo(Ladder::class);
    }

    // A LadderChallenge belongs to a User as challenger
    public function challenger()
    {
        return $this->belongsTo(User::class, 'challenger_id');
    }

    // A LadderChallenge belongs to a User as challenged
    public function challenged()
    {
        return $this->belongsTo(User::class, 'challenged_id');
    }
}
