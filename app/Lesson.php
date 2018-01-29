<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function exercises()
    {
        return $this->hasMany('App\Exercise');
    }

    public function lessoncontents()
    {
        return $this->hasMany('App\Lessoncontent');
    }

    public function points()
    {
        return $this->hasMany('App\Point');
    }

    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }
}
