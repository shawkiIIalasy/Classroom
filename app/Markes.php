<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markes extends Model
{
	 protected $table = 'markes';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
   public function user(){
        return $this->belongsTo('App\User');
    }
}
