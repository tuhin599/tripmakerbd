<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomDetails extends Model
{
    public function booking(){
        return $this->hasMany('App\Booking');
    }

    public function picture(){
        return $this->hasOne('App\Picture','ref_id','id');
    }


}
