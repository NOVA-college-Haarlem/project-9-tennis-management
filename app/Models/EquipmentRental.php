<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentRental extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'equipment_id', 'start_time', 'end_time', 'status'];

    public function equipment() {
        return $this->belongsTo(Equipment::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
