<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nurse extends Model
{
    use HasFactory,SoftDeletes;

    
    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function clinic(){

       // return $this->hasMany(Clinic::class);
       return $this->belongsToMany(Clinic::class, 'clinic_nurse');
    }

    protected $guarded = [];
}
