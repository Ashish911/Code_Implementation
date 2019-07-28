<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productreviews extends Model
{
    public $timestamps = false;

    public function Users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function Product()
    {
        return $this->belongsTo(products::class,'id');
    }
}
