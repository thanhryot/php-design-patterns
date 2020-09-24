<?php

namespace Tests\Creational\Singleton;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function test()
    {
        $objectCaseOne = Singleton::getInstance();
        $objectCaseTwo = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $objectCaseOne);
        $this->assertSame($objectCaseOne, $objectCaseTwo);
    }
}
