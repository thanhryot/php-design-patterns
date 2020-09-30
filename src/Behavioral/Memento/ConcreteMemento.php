<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Memento;

class ConcreteMemento implements Memento
{
    private $state;
    private $date;

    public function __construct(string $state)
    {
        $this->date = date('Y-m-d H:i:s');
        $this->state = $state;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getVersion()
    {
        return $this->state . ' - ' . $this->date;
    }
}