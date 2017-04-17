<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    public function rooms(){
        return $this->hasMany('App\RoomDetails','hotel_id','id');
    }
}
