<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    public $timestamps = false;

    public function Users()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
