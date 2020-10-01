<?php

namespace Tests\Behavioral\Visitor;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Behavioral\Visitor\Dog;
use ThanhRyot\DesignPatterns\Behavioral\Visitor\Cat;
use ThanhRyot\DesignPatterns\Behavioral\Visitor\SayVisitor;

class VisitorTest extends TestCase
{
    public function testCatCanSay()
    {
        $visitor = new SayVisitor();
        $cat = new Cat('Tom');
        $cat->accept($visitor);

        $this->assertSame("Tom say meomeo", $visitor->visitCat($cat));
    }
}
