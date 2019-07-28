<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buy_products extends Model
{
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','id');
    }

    public  function Product(){
        return $this->hasMany('App\products');
    }
}
