<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    public function Post(){
         return $this->belongsTo('App\Post');
    }
   public function user(){
        return $this->belongsTo('App\User');
    }
}
