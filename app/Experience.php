<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table="experience";

    public function user(){
        return $this->belongsTo('App\User','exp_by','id');
    }
}
