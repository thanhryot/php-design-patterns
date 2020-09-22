<?php

namespace ThanhRyot\DesignPatterns\Behavioral\State;

class AudioPlayer
{
    protected $state;

    public function __construct()
    {
        $this->state = new PlayingState($this);
    }

    public function changeState(State $state)
    {
        $this->state = $state;
    }

    public function clickLock()
    {
        $this->state->clickLock();
    }

    public function clickPlay()
    {
        return $this->state->clickPlay();
    }

    public function clickNext()
    {
        return $this->state->clickNext();
    }

    public function clickPrevious()
    {
        return $this->state->clickPrevious();
    }
}