<?php

namespace App\Http\Helpers;

class playlistRows{
    private $values = array();//simple array to hold content types that are selected
    private $count;

    //constructor function
    public function __construct() {
        $this->count = 0;
    }

    public function addType($type){
        if (($this->count == 3) or in_array($type, $this->values) ){
            return;
        }
        array_push($this->values,$type);
        $this->count += 1;
    }
        
}