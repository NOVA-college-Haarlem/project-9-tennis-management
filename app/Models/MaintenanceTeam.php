<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceTeam extends Model
{
    public function maintenanceActivity()
    {
        return $this->hasMany(MaintenanceActivity::class);
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }
}
