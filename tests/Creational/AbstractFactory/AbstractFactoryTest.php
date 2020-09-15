<?php

namespace Tests\Creational\AbstractFactory;

use ThanhRyot\DesignPatterns\Creational\AbstractFactory\SmartPhoneFactory;
use ThanhRyot\DesignPatterns\Creational\AbstractFactory\XiaomiPhoneFactory;
use ThanhRyot\DesignPatterns\Creational\AbstractFactory\ApplePhoneFactory;
use ThanhRyot\DesignPatterns\Creational\AbstractFactory\Company;
use ThanhRyot\DesignPatterns\Creational\AbstractFactory\OperatingSystem;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new XiaomiPhoneFactory()],
            [new ApplePhoneFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     *
     * @param SmartPhoneFactory $smartPhoneFactory
     */
    public function testCanCreateSmartPhone(SmartPhoneFactory $smartPhoneFactory)
    {
        $this->assertInstanceOf(Company::class, $smartPhoneFactory->createProducer());
        $this->assertInstanceOf(OperatingSystem::class, $smartPhoneFactory->createOS());
    }
}
