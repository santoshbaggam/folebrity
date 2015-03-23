<?php

class Domain extends Eloquent {

    public function categories()
    {
        return $this->belongsToMany('Category');
    }

    public function celebrities()
    {
        return $this->belongsToMany('Celebrity');
    }

}