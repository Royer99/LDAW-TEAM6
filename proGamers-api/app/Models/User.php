<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//Sanctum token
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name', 'last_name', 'last_name2', 'phone_number', 'email', 'password', 'role_id', ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];

    /******************
        ASOCIACIONES
    *******************/

    //Un usuario puede tener solo un rol
    public function role(){
        return $this->belongsTo(Role::class);
    }

    /*************************
        MÉTODOS DE LA CLASE
    *************************/

    public function getPrivilegesList(){

        $privileges = $this->role->privileges->pluck("name");

        return $privileges;

    }

    public $timestamps = false;

}
