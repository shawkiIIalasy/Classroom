<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{

	 public  $table = 'info';
    // Primary Key
    public $primaryKey = 'id';
   
    // Timestamps
    public $timestamps = true;
     public function user(){
        return $this->belongsTo('App\User');
    }
      public function comment(){
        return $this->belongsTo('App\comment');
    }
    
}
