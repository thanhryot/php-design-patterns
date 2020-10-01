<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Visitor;

class Dog extends Animal
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitDog($this);
    }

    public function say()
    {
        return $this->getName()." say gaugau";
    }
}