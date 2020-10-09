<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Memento;

class Caretaker
{
    private $mementos = [];
    private $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function undo()
    {
        $memento = array_pop($this->mementos);
        $this->originator->restore($memento);
    }

    public function save()
    {
        $this->mementos[] = $this->originator->save();
    }

    public function showHistory()
    {
        $result = [];
        foreach ($this->mementos as $memento) {
            $result[] = $memento->getVersion();
        }

        return $result;
    }
}
