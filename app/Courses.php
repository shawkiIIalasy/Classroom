<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
      // Table Name
    public $table = 'courses';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
 

    public function user(){
        return $this->belongsTo('App\User');
    }
}
