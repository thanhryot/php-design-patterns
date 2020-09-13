<?php

namespace ThanhRyot\DesignPatterns\Creational\FactoryMethod;

class CarFactory implements ProductFactory
{
     public $price;
     public function __construct($price)
     {
         $this->price = $price;
     }

    public function create()
    {
        return new Car($this->price);
    }
}