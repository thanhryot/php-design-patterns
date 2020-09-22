<?php

namespace Tests\Behavioral\State;

use ThanhRyot\DesignPatterns\Behavioral\State\AudioPlayer;
use ThanhRyot\DesignPatterns\Behavioral\State\LockedState;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testAudioChangeState()
    {
        $player = new AudioPlayer();

        $this->assertSame('Playing', $player->clickPlay());
        $this->assertSame('Next song', $player->clickNext());
        $this->assertSame('Previous song', $player->clickPrevious());

        // changing state to "LockedState"
        $player->clickLock();

        $this->assertSame('Lock', $player->clickPlay());
        $this->assertSame('Lock', $player->clickNext());
        $this->assertSame('Lock', $player->clickPrevious());
    }
}