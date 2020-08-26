<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    #one to one relationship
    public function post(){
        return $this->hasOne('App\Post');
    }
    #one to many relationship
    public function posts(){
        return $this->hasMany('App\Post');
    }

    #many to many relationship
    public function roles(){
        return $this->belongsToMany('App\Role')->withPivot('created_at');

    #To customize tables name and columns follow the format below
//  return $this->belongsToMany('App\Role', table name 'user_roles', foreign key users. 'user_id', = roles. 'role_id');
    }

    public function photos(){
        return $this->morphMany('App\Photo', 'imageable');
    }

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
}
