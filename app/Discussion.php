<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
