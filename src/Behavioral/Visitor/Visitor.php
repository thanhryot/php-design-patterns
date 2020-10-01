<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Visitor;

interface Visitor
{
    public function visitDog(Dog $dog);

    public function visitCat(Cat $cat);
}