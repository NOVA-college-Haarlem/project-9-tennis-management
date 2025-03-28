<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceCostAndEquipment extends Model
{
    public function maintenanceActivity()
    {
        return $this->belongsTo(MaintenanceActivity::class);
    }
}
