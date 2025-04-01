<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 24878b24bd768d6b3e57e8b24e06be2faff70d42
use Illuminate\Database\Eloquent\Model;

class CompetitionTeam extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $fillable = ['competition_id', 'name', 'captain_id'];

    public function competition() {
        return $this->belongsTo(Competition::class);
    }

    public function members() {
        return $this->belongsToMany(User::class, 'competition_team_user', 'team_id', 'user_id');
=======
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    // A CompetitionTeam has many Users
    public function users()
    {
        return $this->hasMany(User::class);
>>>>>>> 24878b24bd768d6b3e57e8b24e06be2faff70d42
    }
}
