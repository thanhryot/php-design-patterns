<?php

namespace ThanhRyot\DesignPatterns\Creational\FactoryMethod;

class Car implements Product
{
    protected $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getName()
    {
        return "Hello, I'm car product!";
    }

    public function getPrice()
    {
        return $this->price;
    }
}