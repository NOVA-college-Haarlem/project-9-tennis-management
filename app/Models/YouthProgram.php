<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YouthProgram extends Model
{
    public function registrations()
    {
        return $this->hasMany(YouthRegistration::class);
    }
}
