<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'start_date', 'end_date', 'min_skill_level',
        'max_skill_level', 'format', 'entry_fee', 'status'
    ];

    public function registrations()
    {
        return $this->hasMany(TournamentRegistration::class);
    }

    public function matches()
    {
        return $this->hasMany(TournamentMatch::class);
    }
}
