<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        //devuelve todos los roles
        return $this->belongsToMany(Rol::class);

    }

    public function hasAnyRol($roles){

        //busca en los roles, si tiene alguno de esos roles
        if($this->roles()->whereIn('nombre',$roles)->first()){
            return true;
        }
        return false;

    }

    public function hasRol($rol){

        //
        if($this->roles()->where('nombre',$rol)->first()){
            return true;
        }
        return false;

    }
    
}
