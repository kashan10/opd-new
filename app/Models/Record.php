<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Record extends Model
{
    use HasFactory,SoftDeletes;

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function Appoinment()
    {
        return $this->belongsTo(Record::class);
    }
}
