<?php

namespace ThanhRyot\DesignPatterns\Creational\FactoryMethod;

class BicycleFactory implements ProductFactory
{
    public $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function create()
    {
        return new Bicycle($this->price);
    }
}