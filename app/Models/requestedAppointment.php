<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class requestedAppointment extends Model
{
    use HasFactory,SoftDeletes;

    public function appoinment(){
        return $this->hasOne(Appointment::class);
    }

    public function clinic(){
        return $this->belongsTo(Clinic::class);
    }

}
