<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    Public function user()
    {
        return $this->belongsTo('App\user');
    }

    Public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
