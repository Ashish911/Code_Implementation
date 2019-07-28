<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artistreviews extends Model
{
    public $timestamps = false;

    public function Users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function Artist()
    {
        return $this->belongsTo(artist::class,'id');
    }
}
