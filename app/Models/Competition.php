<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 24878b24bd768d6b3e57e8b24e06be2faff70d42
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'min_skill_level', 'max_skill_level', 'format', 'status'];

=======
>>>>>>> 24878b24bd768d6b3e57e8b24e06be2faff70d42
    public function teams()
    {
        return $this->hasMany(CompetitionTeam::class);
    }

<<<<<<< HEAD
=======
    // A Competition has many CompetitionMatches
>>>>>>> 24878b24bd768d6b3e57e8b24e06be2faff70d42
    public function matches()
    {
        return $this->hasMany(CompetitionMatch::class);
    }
}
