<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
   // Table Name
    protected $table = 'room';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;


    public function messeage(){
        return $this->hasMany('App\Masseage','room_id');
    }
  
}
