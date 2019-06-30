<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    public $timestamps = false;

    public function Booking(){
        return $this->belongsToMany('App\Booking');
    }
}
