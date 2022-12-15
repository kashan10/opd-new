<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Time extends Model
{
    use HasFactory,SoftDeletes;

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }
}
