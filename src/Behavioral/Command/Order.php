<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Command;
/*
 * Command
 */

interface Order
{
    public function execute();

    public function getName();
}