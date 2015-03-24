<?php

class Celebrity extends Eloquent {

    public function details()
    {
        return $this->hasOne('CelebrityDetail');
    }

    public function domains()
    {
        return $this->belongsToMany('Domain');
    }

    public function categories()
    {
        return $this->belongsToMany('Category');
    }
}