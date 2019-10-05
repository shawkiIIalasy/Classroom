<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    // Table Name
    protected $table = 'educations';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
