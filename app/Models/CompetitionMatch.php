<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 24878b24bd768d6b3e57e8b24e06be2faff70d42
use Illuminate\Database\Eloquent\Model;

class CompetitionMatch extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $fillable = ['competition_id', 'court_id', 'team1_id', 'team2_id', 'scheduled_time', 'score', 'status'];

    public function competition() {
        return $this->belongsTo(Competition::class);
    }

    public function team1() {
        return $this->belongsTo(CompetitionTeam::class, 'team1_id');
    }

    public function team2() {
        return $this->belongsTo(CompetitionTeam::class, 'team2_id');
    }
=======
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
>>>>>>> 24878b24bd768d6b3e57e8b24e06be2faff70d42
}
