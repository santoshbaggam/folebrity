<?php

class Category extends Eloquent {

    public function domains()
    {
        return $this->belongsToMany('Domain');
    }

    public function celebrities()
    {
        return $this->belongsToMany('Celebrity');
    }

}