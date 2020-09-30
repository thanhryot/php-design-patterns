<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Memento;

class Originator
{
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function save()
    {
        return new ConcreteMemento($this->state);
    }

    public function restore(ConcreteMemento $memento)
    {
        $this->state = $memento->getState();
    }

    public function doSomething()
    {
        $this->state = $this->generateRandomString();
    }

    private function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}