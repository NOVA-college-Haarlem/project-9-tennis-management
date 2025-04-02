<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionTeam extends Model
{
    use HasFactory;

    protected $fillable = ['competition_id', 'name', 'captain_id'];

    public function competition() {
        return $this->belongsTo(Competition::class);
    }

    public function members() {
        return $this->belongsToMany(User::class, 'competition_team_user', 'team_id', 'user_id');
    }
    public function captain() {
        return $this->belongsTo(User::class, 'captain_id');
    }
}
