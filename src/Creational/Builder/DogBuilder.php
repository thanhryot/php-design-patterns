<?php

namespace ThanhRyot\DesignPatterns\Creational\Builder;

class DogBuilder implements Builder
{
    protected $dog;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->dog = new Dog();
    }

    public function addName($name)
    {
        $this->dog->name = $name;

        return $this;
    }

    public function addAge($age)
    {
        $this->dog->age = $age;

        return $this;
    }

    public function addSex($sex)
    {
        $this->dog->sex = $sex;

        return $this;
    }

    public function addFoot($foot)
    {
        $this->dog->sex = $foot;

        return $this;
    }

    public function addSkinColor($color)
    {
        $this->dog->skinColor = $color;

        return $this;
    }

    public function getAnimal()
    {
        return $this->dog;
    }
}
