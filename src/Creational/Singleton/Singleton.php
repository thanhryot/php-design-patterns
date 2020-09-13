<?php
namespace ThanhRyot\DesignPatterns\Creational\Singleton;

class Singleton {

    private static $instance = null;

    // make sure other classes cannot create instances of this class :^_^:
    private function __construct()
    {
    }

    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}