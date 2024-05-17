<?php

namespace app\classes;

class Uri {

    public static function uri(){
        return $_SERVER['REQUEST_URI'];
    }
        
}