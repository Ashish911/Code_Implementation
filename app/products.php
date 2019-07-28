<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public $timestamps = false;

    public function buyProduct()
    {
        return $this->belongsTo('App\buy_products','id');
    }

    public function product_reviews()
    {
        return $this->hasMany(productreviews::class);
    }
}
