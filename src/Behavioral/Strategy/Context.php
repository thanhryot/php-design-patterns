<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Strategy;

class Context
{
    protected $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(int $a, int $b)
    {
        return $this->strategy->execute($a, $b);
    }
}
