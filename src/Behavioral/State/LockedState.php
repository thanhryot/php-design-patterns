<?php

namespace ThanhRyot\DesignPatterns\Behavioral\State;

class LockedState extends State
{
    public function clickLock(){
        $this->player->changeState(new PlayingState($this->player));
    }

    public function clickPlay(){
        return "Lock";
    }

    public function clickNext(){
        return "Lock";
    }

    public function clickPrevious(){
        return "Lock";
    }
}