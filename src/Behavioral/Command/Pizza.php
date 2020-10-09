<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Command;

/*
 * ConcreteCommand
 */

class Pizza implements Order
{
    protected $chef;

    public function __construct()
    {
        $this->chef = new PizzaChef();
    }

    public function getName()
    {
        return 'Pizza';
    }

    public function execute()
    {
        return $this->chef->makePizza();
    }
}
