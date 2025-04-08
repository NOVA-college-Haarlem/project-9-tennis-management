<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YouthRegistration extends Model
{
    protected $fillable = [
        'parent_user_id',
        'program_id',
        'child_firstname',
        'child_lastname',
        'child_age',
        'emergency_contact_phone',
        'registration_date',
        'status',
    ];

    public function program()
    {
        return $this->belongsTo(YouthProgram::class);
    }
}
