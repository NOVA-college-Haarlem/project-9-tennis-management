<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YouthProgram extends Model
{

    protected $fillable = [
        'name',
        'description',
        'min_age',
        'max_age',
        'start_date',
        'end_date',
        'schedule',
        'fee',
        'capacity',
    ];

    public function registrations()
    {
        return $this->hasMany(YouthRegistration::class);
    }
}
