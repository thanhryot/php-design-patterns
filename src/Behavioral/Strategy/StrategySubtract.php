<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Strategy;

class StrategySubtract implements Strategy
{
    public function execute(int $a, int $b)
    {
        return $a - $b;
    }
}
