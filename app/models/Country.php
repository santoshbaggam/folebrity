<?php

class Country extends Eloquent {

    public function celebrity()
    {
        return $this->belongsToMany('CelebrityDetail');
    }
}