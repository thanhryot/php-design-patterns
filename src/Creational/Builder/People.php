<?php

namespace ThanhRyot\DesignPatterns\Creational\Builder;

class People
{
    public function create(Builder $builder)
    {
        return $builder->getAnimal();
    }
}