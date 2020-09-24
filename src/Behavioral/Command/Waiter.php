<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Command;

/*
 * Invoker
 */

class Waiter
{
    public function getOrder(Order $order)
    {
        echo 'Waiter take new order'.$order->getName();

        return $order->execute();
    }
}
