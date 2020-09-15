<?php

namespace ThanhRyot\DesignPatterns\Creational\AbstractFactory;

interface SmartPhoneFactory
{
    public function createProducer();

    public function createOS();
}