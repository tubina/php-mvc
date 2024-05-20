<?php

namespace app\classes;

class Bind {

    private static $bind = [];

    public static function set($name, $value){

        if(!isset(static::$bind[$name])){
            static::$bind[$name] = $value;
        }

    }

    public static function get($name){

        if(isset(static::$bind[$name])){
            return (object) static::$bind[$name];
        }
        throw new \Exception("Esse indice não existe dentro do bind: {$name}");

    }

}