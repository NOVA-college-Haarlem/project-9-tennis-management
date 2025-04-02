<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionMatch extends Model
{
    use HasFactory;

    protected $fillable = ['competition_id', 'court_id', 'team1_id', 'team2_id', 'scheduled_time', 'status'];

    public function competition() {
        return $this->belongsTo(Competition::class);
    }

    public function team1() {
        return $this->belongsTo(CompetitionTeam::class, 'team1_id');
    }

    public function team2() {
        return $this->belongsTo(CompetitionTeam::class, 'team2_id');
    }
    public function court() {
        return $this->belongsTo(Court::class, 'court_id');
    }
}
