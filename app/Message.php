<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function sender(){
        return $this->belongsTo('App\User', 'from');
    }
    public function receiver(){
        return $this->belongsTo('App\User', 'to');
    }
}
