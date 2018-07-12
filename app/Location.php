<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function tours()
    {
         return $this->hasMany('App\Tour');
    }

    public function getExcerpt()
    {
        return mb_strimwidth($this->description, 0, 200, '.');
    }
}
