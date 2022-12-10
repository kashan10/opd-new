<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use MBarlow\Megaphone\HasMegaphone;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles ,HasMegaphone;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function doctor()
    {
       return $this->hasOne(Doctor::class);
    }
    public function nurse()
    {
       return $this->hasOne(Nurse::class);
    }

    public function patient()
    {
       return $this->hasOne(Patient::class);
    }

    public function systemoperetor()
    {
       return $this->hasOne(Systemoperetor::class);
    }

    public function doctorClinic()
    {
        return $this->hasOneThrough(
            Clinic::class, 
            Doctor::class,
            'user_id',
            'doctor_id',
            'id',
            'id'

        
        );
    }
    // public function role()
    // {
    //     return $this->belongsTo(Role::class);
    // }
}
