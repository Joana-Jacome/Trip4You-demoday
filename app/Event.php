<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function tour()
    {
        $this->belongsTo('App\Tour');
    }

    public function registrations()
    {
        $this->hasMany('App\Registration');
    }
}
