<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tattooreviews extends Model
{
    public $timestamps = false;

    public function Users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function Tattoo()
    {
        return $this->belongsTo(Tattoo::class,'id');
    }
}
