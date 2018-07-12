<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){

        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function getExcerpt()
    {
        return mb_strimwidth($this->content, 0, 200, '...');
    }
}
