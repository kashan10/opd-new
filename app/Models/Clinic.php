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
       // return $this->belongsTo(Nurse::class);
        return $this->belongsToMany(Nurse::class, 'clinic_nurse','clinic_id','nurse_id');
    }
    public function doctor()
    {
        //return $this->belongsTo(Doctor::class);
        return $this->belongsToMany(Doctor::class, 'clinic_doctor','clinic_id','doctor_id');
    }

    public function requestedappoinment(){

        return $this->hasMany(requestedAppointment::class);
    }

    protected $fillable = [
        'time',
        'doctor_id',
        'clinic_id',
        
    ];
}
