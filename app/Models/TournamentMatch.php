<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class TournamentMatch extends Model
{

    use HasFactory;

    protected $fillable = [
        'tournament_id',
        'player1_id',
        'player2_id',
        'player1_score',
        'player2_score',
        'status',
        'scheduled_time',
    ];


    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }


    public function court()
    {
        return $this->belongsTo(Court::class);
    }

    public function player1()
    {
        return $this->belongsTo(User::class, 'player1_id');
    }

    public function player2()
    {
        return $this->belongsTo(User::class, 'player2_id');
    }

}
