<?php

namespace ThanhRyot\DesignPatterns\Structural\Facade;

class ShippingService
{
    public function shipFree()
    {
        return 'Free shipping product to customer.';
    }

    public function shipBasic()
    {
        return 'Shipping product to customer.';
    }
}