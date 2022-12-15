<?php

namespace App\Models;


use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory,SoftDeletes;

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function reqappoinment(){
        return $this->belongsTo(requestedAppointment::class);
    }

    public function records(){
        return $this->hasOne(Record::class);
    }

    public function systemoperetors(){
        return $this->belongsTo(Systemoperetor::class);
    }

    public function time(){
        return $this->hasOne(Time::class);
    }
}
