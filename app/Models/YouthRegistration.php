<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YouthRegistration extends Model
{
    public function program()
    {
        return $this->belongsTo(YouthProgram::class);
    }
}
