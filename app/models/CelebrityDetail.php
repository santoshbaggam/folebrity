<?php

class CelebrityDetail extends Eloquent {

    public function celebrity()
    {
        return $this->belongsTo('Celebrity');
    }

    public function country()
    {
        return $this->hasMany('Country');
    }
}