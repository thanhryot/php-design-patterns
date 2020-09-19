<?php

namespace ThanhRyot\DesignPatterns\Structural\Decorator;

class ConcreteDecoratorA extends Decorator
{
    public function operation()
    {
        return 'ConcreteDecoratorA('.parent::operation().')';
    }
}
