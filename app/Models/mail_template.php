<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mail_template extends Model
{
    use HasFactory;

    public function clinic(){

        return $this->belongsTo(Clinic::class);
     }
}
