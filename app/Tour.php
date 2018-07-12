<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tour extends Model
{   
    public function location(){
        $this->belongsTo('App\Location');
    }

    public function events()
    {
        $this->hasMany('App\Event');
    }
    
}
