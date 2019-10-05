<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masseage extends Model
{protected $table = 'masseage';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;


    public function room(){
        return $this->belongsTo('App\Rooms','room_id');
    }
       public function user(){
        return $this->belongsTo('App\User','user_id');
    }
  
}
