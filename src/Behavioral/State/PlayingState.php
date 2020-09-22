<?php

namespace ThanhRyot\DesignPatterns\Behavioral\State;

class PlayingState extends State
{
    public function clickLock()
    {
        $this->player->changeState(new LockedState($this->player));
    }

    public function clickPlay()
    {
        return "Playing";
    }

    public function clickNext()
    {
        return "Next song";
    }

    public function clickPrevious()
    {
        return "Previous song";
    }
}