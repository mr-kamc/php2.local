<?php

trait Singleton {

    protected static $instance;

    protected function __construct()
    {
    }

    public function instance()
    {
        if(null === static::instance()){
            static::$instance = new static();
        }
        return static::$instance;
    }
}