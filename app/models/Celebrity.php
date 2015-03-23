<?php

class Celebrity extends Eloquent {

    public function domains()
    {
        return $this->belongsToMany('Domain');
    }

    public function categories()
    {
        return $this->belongsToMany('Category');
    }

}