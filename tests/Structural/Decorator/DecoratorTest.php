<?php

namespace Test\Structural\Decorator;

use ThanhRyot\DesignPatterns\Structural\Decorator\ConcreteComponent;
use ThanhRyot\DesignPatterns\Structural\Decorator\ConcreteDecoratorA;
use ThanhRyot\DesignPatterns\Structural\Decorator\ConcreteDecoratorB;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testSimple()
    {
        $concreteComponent = new ConcreteComponent();

        $this->assertSame('ConcreteComponent', $concreteComponent->operation());
    }

    public function testDecoratorSimple()
    {
        $concreteComponent = new ConcreteComponent();
        $concreteDecoratorA = new ConcreteDecoratorA($concreteComponent);

        $this->assertSame('ConcreteDecoratorA(ConcreteComponent)', $concreteDecoratorA->operation());
    }

    public function testManyDecorator()
    {
        $concreteComponent = new ConcreteComponent();
        $concreteDecoratorA = new ConcreteDecoratorA($concreteComponent);
        $concreteDecoratorB = new ConcreteDecoratorB($concreteDecoratorA);
        
        $this->assertSame('ConcreteDecoratorB(ConcreteDecoratorA(ConcreteComponent))', $concreteDecoratorB->operation());
    }
}