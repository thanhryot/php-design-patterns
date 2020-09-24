<?php

namespace ThanhRyot\DesignPatterns\Structural\Decorator;

class ConcreteDecoratorB extends Decorator
{
    public function operation()
    {
        return 'ConcreteDecoratorB('.parent::operation().')';
    }
}
