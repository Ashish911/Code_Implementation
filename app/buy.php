<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buy extends Model
{
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','id');
    }

    public  function Tattoo(){
        return $this->hasMany('App\Tattoo');
    }
}
