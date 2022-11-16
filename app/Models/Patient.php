<?php

namespace App\Models;

use App\Models\Record;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory,SoftDeletes;

    public function appointment(){

        return $this->hasMany(Appointment::class);
    }

    public function record(){

        return $this->hasMany(Record::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
