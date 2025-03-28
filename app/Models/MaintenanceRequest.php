<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function maintenanceActivities()
    {
        return $this->hasMany(MaintenanceActivity::class);
    }
}
