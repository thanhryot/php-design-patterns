<?php

namespace Test\Structural\Proxy;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Structural\Flyweight\FlyweightFactory;

class FlyweightTest extends TestCase
{
    private $dataShares = ['function', 'condition', 'declare', 'loop'];
    private $dataUniques = ['PHP', 'JavaScript', 'Python', 'C++'];

    public function testCountFlyweightsToBeCreate()
    {
        $flyweightFactory = new FlyweightFactory();
        foreach ($this->dataUniques as $dataUnique) {
            foreach ($this->dataShares as $share) {
                $flyweightFactory->getFlyweight($share);
            }
        }
        $this->assertCount(count($this->dataUniques), $flyweightFactory);
    }

    public function testDetailFlyweightsOperation()
    {
        $compareData = [
            'PHP - function',
            'PHP - condition',
            'PHP - declare',
            'PHP - loop',
            'JavaScript - function',
            'JavaScript - condition',
            'JavaScript - declare',
            'JavaScript - loop',
            'Python - function',
            'Python - condition',
            'Python - declare',
            'Python - loop',
            'C++ - function',
            'C++ - condition',
            'C++ - declare',
            'C++ - loop'
        ];

        $realData = array();
        $flyweightFactory = new FlyweightFactory();
        foreach ($this->dataUniques as $dataUnique) {
            foreach ($this->dataShares as $share) {
                $flyweight = $flyweightFactory->getFlyweight($share);
                $realData[] = $flyweight->operation($dataUnique);
            }
        }
        $this->assertSame($compareData, $realData);
    }
}
