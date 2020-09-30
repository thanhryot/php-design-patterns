<?php

namespace Tests\Behavioral\Memento;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Behavioral\Memento\Originator;
use ThanhRyot\DesignPatterns\Behavioral\Memento\Caretaker;

class MementoTest extends TestCase
{
    public function testCanUndoOriginator()
    {
        $originator = new Originator('initial');
        $caretaker = new Caretaker($originator);
        $caretaker->save(); // first snapshot

        sleep(2);
        $originator->doSomething();
        $caretaker->save(); // second snapshot

        sleep(3);
        $originator->doSomething();
        $caretaker->save(); // third snapshot

        $historyBefore = $caretaker->showHistory();
        $caretaker->undo();
        $historyAfter = $caretaker->showHistory();
        array_pop($historyBefore);

        $this->assertSame($historyAfter, $historyBefore);
    }
}
