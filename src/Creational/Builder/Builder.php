<?php

namespace ThanhRyot\DesignPatterns\Creational\Builder;

interface Builder
{
    public function reset();

    public function addName($name);

    public function addAge($age);

    public function addSex($sex);

    public function addFoot($foot);

    public function addSkinColor($color);

    public function getAnimal();
}
