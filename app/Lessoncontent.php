<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessoncontent extends Model
{

    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }
}
