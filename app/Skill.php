<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
   // Table Name
    protected $table = 'skills';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
  
}
