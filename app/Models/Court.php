<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;

class Court extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'court_type',
        'surface',
        'indoor',
        'active',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'booking_id');
    }

    public function maintenanceSchedules()
    {
        return $this->hasMany(MaintenanceSchedule::class, 'maintenance_schedule_id');
    }
    // public function competitionMatches()
    // {
    //     return $this->hasMany(CompetitionMatch::class, 'competition_match_id');
    // }



  

}
