<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $keyType = 'string';
    protected $guarded = [];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function principle()
    {
        return $this->hasOne(Principle::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
