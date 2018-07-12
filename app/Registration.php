<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function event()
    {
        $this->belongsTo('App\Event');
    }

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
