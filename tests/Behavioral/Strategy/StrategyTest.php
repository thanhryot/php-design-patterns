<?php

namespace Tests\Behavioral\Strategy;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Behavioral\Strategy\Context;
use ThanhRyot\DesignPatterns\Behavioral\Strategy\StrategyAdd;
use ThanhRyot\DesignPatterns\Behavioral\Strategy\StrategyMultiply;
use ThanhRyot\DesignPatterns\Behavioral\Strategy\StrategySubtract;

class StrategyTest extends TestCase
{
    public function testExecuteAddNumber()
    {
        $context = new Context(new StrategyAdd());
        $result = $context->executeStrategy(20, 10);
        $this->assertSame(30, $result);
    }

    public function testExecuteSubtractNumber()
    {
        $context = new Context(new StrategySubtract());
        $result = $context->executeStrategy(20, 10);
        $this->assertSame(10, $result);
    }

    public function testExecuteMultiplyNumber()
    {
        $context = new Context(new StrategyMultiply());
        $result = $context->executeStrategy(20, 10);
        $this->assertSame(200, $result);
    }
}
