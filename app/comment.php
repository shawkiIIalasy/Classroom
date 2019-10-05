<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class comment extends Model
{
	protected $table = 'comments';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
	public function Post(){
         return $this->belongsTo('App\Post');
    }
   public function user(){
        return $this->belongsTo('App\User');
    }
     public function info(){
        return $this->hasMany('App\info','user_id');
    }
}
