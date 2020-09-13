<?php

namespace Tests\Creational\FactoryMethod;

use ThanhRyot\DesignPatterns\Creational\FactoryMethod\CarFactory;
use ThanhRyot\DesignPatterns\Creational\FactoryMethod\BicycleFactory;
use ThanhRyot\DesignPatterns\Creational\FactoryMethod\Car;
use ThanhRyot\DesignPatterns\Creational\FactoryMethod\Bicycle;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCreateCar()
    {
        $carFactory = new CarFactory(1000);
        $this->assertInstanceOf(Car::class, $carFactory->create());
    }

    public function testCreateBicycle()
    {
        $bicycleFactory = new BicycleFactory(100);
        $this->assertInstanceOf(Bicycle::class, $bicycleFactory->create());
    }

}