<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'condition', 'available', 'rental_fee'];

    public function rentals() {
        return $this->hasMany(EquipmentRental::class);
    }
}
