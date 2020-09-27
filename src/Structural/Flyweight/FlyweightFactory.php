<?php

namespace ThanhRyot\DesignPatterns\Structural\Flyweight;

class FlyweightFactory implements \Countable
{
    protected $flyweights = [];

    public function getFlyweight(string $sharedState)
    {
        if (!in_array($sharedState, $this->flyweights)){
            $this->flyweights[$sharedState] = new Flyweight($sharedState);
        }
        return $this->flyweights[$sharedState];
    }

    public function count()
    {
        return count($this->flyweights);
    }


}