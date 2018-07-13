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

    public function getDateFrom()
    {
        $column = 'Date from';

        return $this[$column];
    }

    public function getDateEnds()
    {
        $column = 'Date ends';

        return $this[$column];
    }

    public function getFormattedDates()
    {
        return date('j', strtotime((string)$this->getDateFrom()))
        . '-' 
        . date('j F Y', strtotime((string)$this->getDateEnds()));
    }
}
