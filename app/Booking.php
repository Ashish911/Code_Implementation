<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $timestamps = false;

    public function Artist(){
        return $this->hasMany('App\artist');
    }

    public function User(){
        return $this->hasMany('App\User');
    }
}
