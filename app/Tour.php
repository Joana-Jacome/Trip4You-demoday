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
        return $this->hasMany('App\Event');
    }
    
}
