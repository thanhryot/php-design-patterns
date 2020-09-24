<?php

namespace Tests\Creational\Builder;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Creational\Builder\Chicken;
use ThanhRyot\DesignPatterns\Creational\Builder\ChickenBuilder;
use ThanhRyot\DesignPatterns\Creational\Builder\Dog;
use ThanhRyot\DesignPatterns\Creational\Builder\DogBuilder;
use ThanhRyot\DesignPatterns\Creational\Builder\People;

class BuilderTest extends TestCase
{
    public function testCreateDog()
    {
        $people = new People();
        $dogBuilder = new DogBuilder();
        $dog = $people->create(
            $dogBuilder->addName('Zi')
                ->addAge(10)
                ->addFoot(4)
                ->addSex('male')
                ->addSkinColor('black')
        );
        $this->assertInstanceOf(Dog::class, $dog);
    }

    public function testCreateChicken()
    {
        $people = new People();
        $chickenBuilder = new ChickenBuilder();
        $chicken = $people->create(
            $chickenBuilder->addName('Nana')
                ->addAge(1)
                ->addFoot(2)
                ->addSex('female')
                ->addSkinColor('yellow')
                ->addWing()
        );
        $this->assertInstanceOf(Chicken::class, $chicken);
    }
}
