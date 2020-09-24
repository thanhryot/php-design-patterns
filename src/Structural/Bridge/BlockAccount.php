<?php

namespace ThanhRyot\DesignPatterns\Structural\Bridge;

class BlockAccount implements Account
{
    public function openAccount()
    {
        return 'Block Account';
    }
}
