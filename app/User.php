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
        'name', 'email','sign', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany('App\Post');
    }
     public function comment(){
        return $this->hasMany('App\comment');
    }
       public function like(){
        return $this->hasMany('App\like');
    }
     public function Markes(){
       return $this->hasOne('App\Markes', 'user_id', 'id');
    }
       public function info(){
       return $this->hasOne('App\info','user_id','id');
    }
         public function messeage(){
       return $this->hasMany('App\Messeage','user_id');
    }
         public function skills(){
       return $this->hasMany('App\Skill','user_id');
    }
         public function educations(){
       return $this->hasMany('App\Education','user_id');
    }
           public function Courses(){
       return $this->hasOne('App\Courses','user_id','id');
    }
}
