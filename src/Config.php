<?php

namespace Nigill;

class Config{
    public static $config = [];
    
    public static function load($file){
        self::$config = include $file;
    }
    
    public static function get(){
        return self::$config;
    }
}