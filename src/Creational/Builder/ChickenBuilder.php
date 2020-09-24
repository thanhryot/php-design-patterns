<?php

namespace ThanhRyot\DesignPatterns\Creational\Builder;

class ChickenBuilder implements Builder
{
    protected $chicken;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->chicken = new Chicken();
    }

    public function addName($name)
    {
        $this->chicken->name = $name;

        return $this;
    }

    public function addAge($age)
    {
        $this->chicken->age = $age;

        return $this;
    }

    public function addSex($sex)
    {
        $this->chicken->sex = $sex;

        return $this;
    }

    public function addFoot($foot)
    {
        $this->chicken->sex = $foot;

        return $this;
    }

    public function addSkinColor($color)
    {
        $this->chicken->skinColor = $color;

        return $this;
    }

    public function addWing()
    {
        $this->chicken->wing = true;

        return $this;
    }

    public function getAnimal()
    {
        return $this->chicken;
    }
}
