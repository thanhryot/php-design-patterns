<?php

namespace Tests\Creational\Prototype;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Creational\Prototype\BarBook;
use ThanhRyot\DesignPatterns\Creational\Prototype\FooBook;

class PrototypeTest extends TestCase
{
    public function testCanGetFooBookClone()
    {
        $fooBook = new FooBook();
        $book = clone $fooBook;
        $this->assertInstanceOf(FooBook::class, $book);
    }

    public function testCanGetManyBarBookClone()
    {
        for ($i = 0; $i < 10; $i++) {
            $barBook = new BarBook();
            $book = clone $barBook;
            $this->assertInstanceOf(BarBook::class, $book);
        }
    }
}
