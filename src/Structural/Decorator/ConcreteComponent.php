<?php

namespace ThanhRyot\DesignPatterns\Structural\Decorator;

class ConcreteComponent implements Component
{
    public function operation()
    {
        return "ConcreteComponent";
    }
}