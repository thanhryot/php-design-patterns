<?php

namespace ThanhRyot\DesignPatterns\Structural\Bridge;

class VPBank extends Bank
{
    public function openAccount()
    {
        return 'Open VPBank account and do: '.$this->account->openAccount();
    }
}
