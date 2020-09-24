<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Command;

/*
 * Invoker
 */

class Waiter
{
    public function getOrder(Order $order)
    {
        return $order->execute();
    }
}