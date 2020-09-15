<?php

namespace ThanhRyot\DesignPatterns\Creational\AbstractFactory;

class XiaomiPhoneFactory implements SmartPhoneFactory
{
    public function createProducer()
    {
        return new XiaomiCompany();
    }

    public function createOS()
    {
        return new Android();
    }
}