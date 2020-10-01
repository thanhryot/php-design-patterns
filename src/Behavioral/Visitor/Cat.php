<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Visitor;

class Cat extends Animal
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitCat($this);
    }

    public function say()
    {
        return $this->getName()." say meomeo";
    }
}