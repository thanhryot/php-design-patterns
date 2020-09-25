<?php

namespace Test\Structural\Composite;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Structural\Composite\Node;
use ThanhRyot\DesignPatterns\Structural\Composite\Leaf;

class CompositeTest extends TestCase
{
    public function test()
    {
        /**
         *        Node(origin)
         *    Leaf ---------- Node
         *                Leaf --- Leaf
         */
        $origin = new Node();
        $origin->add(new Leaf());

        $branch = new Node();
        $branch->add(new Leaf());
        $branch->add(new Leaf());

        $origin->add($branch);

        $this->assertSame('Leaf - Leaf - Leaf', $origin->operation());
    }
}
