<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceActivity extends Model
{
    public function maintenanceRequest()
    {
        return $this->belongsTo(MaintenanceRequest::class);
    }

    public function staffUser()
    {
        return $this->belongsTo(User::class, 'staff_user_id');
    }

    public function maintenanceCostAndEquipment()
    {
        return $this->hasOne(MaintenanceCostAndEquipment::class);
    }
}
