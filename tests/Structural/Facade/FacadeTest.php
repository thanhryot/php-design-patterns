<?php

namespace Test\Structural\Facade;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Structural\Facade\ShopFacade;

class FacadeTest extends TestCase
{
    public function testBuyProductBasic()
    {
        $shop = new ShopFacade();
        $result = $shop->buyProductBasic();
        $this->assertSame('Done!', $result);
    }

    public function testBuyProductFreeShip()
    {
        $shop = new ShopFacade();
        $result = $shop->buyProductWithFreeShip();
        $this->assertSame('You have purchased the product for free shipping!', $result);
    }
}
