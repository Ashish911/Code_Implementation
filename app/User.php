<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PHPUnit\Framework\Constraint\IsTrue;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FullName', 'Address', 'DOB', 'PhoneNo', 'email', 'UserName', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function is_admin()
    {
        if ($this->UserType == 'Admin') {
            return true;
        }
        return false;
    }

    public function is_active()
    {
        if($this->Status=='Active')
        {
            return true;
        }
        return false;
    }


    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }


    public  function  Tattoo()
    {
        return $this->hasMany(Tattoo::class);
    }

    public  function  buy()
    {
        return $this->hasMany('App\buy');
    }

    public static $Login_validation_rules = [
        'email' => 'required|email|exists:users',
        'password' => 'required'
    ];

}

