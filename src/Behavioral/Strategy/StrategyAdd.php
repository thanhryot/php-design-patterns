<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Strategy;

class StrategyAdd implements Strategy
{
    public function execute(int $a, int $b)
    {
        return $a + $b;
    }
}
