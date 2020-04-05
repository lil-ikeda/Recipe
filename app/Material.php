<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
