<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    public function numbercourses()
    {
        return $this->courses()->count();
    }

    public function coursesSubscripedIn()
    {
        return $this->belongsToMany('App\Course', 'subscribers');
    }

}
