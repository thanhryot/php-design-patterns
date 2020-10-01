<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Visitor;

class SayVisitor implements Visitor
{
    public function visitDog(Dog $dog)
    {
        return $dog->say();
    }

    public function visitCat(Cat $cat)
    {
        return $cat->say();
    }
}