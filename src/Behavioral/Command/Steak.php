<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Command;

/*
 * ConcreteCommand
 */

class Steak implements Order
{
    protected $chef;

    public function __construct()
    {
        $this->chef = new SteakChef();
    }

    public function getName()
    {
        return "Steak";
    }

    public function execute()
    {
        return $this->chef->makeSteak();
    }
}