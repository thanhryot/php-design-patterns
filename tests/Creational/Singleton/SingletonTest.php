<?php
namespace Tests\Creational\Singleton;
use ThanhRyot\DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

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