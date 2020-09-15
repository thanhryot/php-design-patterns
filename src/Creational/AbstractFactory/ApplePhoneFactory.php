<?php

namespace ThanhRyot\DesignPatterns\Creational\AbstractFactory;

class ApplePhoneFactory implements SmartPhoneFactory
{
    public function createProducer()
    {
        return new AppleCompany();
    }

    public function createOS()
    {
        return new IOS();
    }
}