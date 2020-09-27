<?php

namespace ThanhRyot\DesignPatterns\Structural\Flyweight;

class Flyweight
{
    private $sharedState;

    public function __construct(string $sharedState)
    {
        $this->sharedState = $sharedState;
    }

    public function operation(string $uniqueState)
    {
        return $uniqueState.' - '.$this->sharedState;
    }
}