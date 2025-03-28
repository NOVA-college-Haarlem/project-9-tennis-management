<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'end_time',
        'status',
        'court_id',
    ];

    public function court()
    {
        return $this->belongsTo(Court::class, 'court_id');
    }
}
