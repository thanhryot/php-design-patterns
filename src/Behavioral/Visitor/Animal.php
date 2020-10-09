<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Visitor;

abstract class Animal
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function accept(Visitor $visitor);
}
