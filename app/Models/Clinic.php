<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clinic extends Model
{
    use HasFactory, SoftDeletes;

    public function nurse()
    {
        return $this->belongsTo(Nurse::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function requestedappoinment(){

        return $this->hasMany(requestedAppointment::class);
    }
}
