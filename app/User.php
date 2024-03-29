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
        'name', 'surname', 'nick', 'email', 'password', 'decription', 'genre', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relacion de uno a muchos con tabla posts
    public function posts(){
        return $this->hasMany('App\Post');
    }
    //Relacion de uno a muchos con tabla followers
    public function followers(){
        return $this->hasMany('App\followers');
    }
}
