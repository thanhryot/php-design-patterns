<?php

namespace ThanhRyot\DesignPatterns\Creational\FactoryMethod;

class Bicycle implements Product
{
    protected $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getName()
    {
        return "Hello, I'm bicycle product!";
    }

    public function getPrice()
    {
        return $this->price;
    }
}
