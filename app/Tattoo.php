<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tattoo extends Model
{
    public $timestamps = false;

    public function Users()
    {
        return $this->belongsTo('App\User', 'id');
    }

    public  function buy(){
        return $this->belongsTo('App\buy','id');
    }
}
