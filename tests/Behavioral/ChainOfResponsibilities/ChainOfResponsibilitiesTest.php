<?php

namespace Tests\Behavioral\ChainOfResponsibilities;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Behavioral\ChainOfResponsibilities\BarHandler;
use ThanhRyot\DesignPatterns\Behavioral\ChainOfResponsibilities\FooHandler;
use ThanhRyot\DesignPatterns\Behavioral\ChainOfResponsibilities\FuuHandler;

class ChainOfResponsibilitiesTest extends TestCase
{
    public function testCanHandleRequest()
    {
        $fooHandle = new FooHandler();
        $fooHandle->setNext(new BarHandler())->setNext(new FuuHandler());
        foreach (['foo', 'bar', 'kii', 'fuu', 'bee'] as $request) {
            $result = $fooHandle->handle($request);
            if ($result) {
                $this->assertSame('Handler successfully with '.$request, $result);
            } else {
                $this->assertNull($result);
            }
        }
    }
}
