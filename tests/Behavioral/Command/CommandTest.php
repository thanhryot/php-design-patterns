<?php

namespace Tests\Behavioral\Command;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Behavioral\Command\Waiter;
use ThanhRyot\DesignPatterns\Behavioral\Command\Steak;
use ThanhRyot\DesignPatterns\Behavioral\Command\Pizza;

class CommandTest extends TestCase
{
    public function testCanGetPizza(){
        $waiter = new Waiter();
        $pizzaPlate = $waiter->getOrder(new Pizza());
        $this->assertSame( "Make a pizza!", $pizzaPlate);
    }

    public function testCanGetSteak(){
        $waiter = new Waiter();
        $steakPlate = $waiter->getOrder(new Steak());
        $this->assertSame( "Make a steak!", $steakPlate);
    }
}
