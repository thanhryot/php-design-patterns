<?php

namespace ThanhRyot\DesignPatterns\Structural\Bridge;

class TPBank extends Bank
{
    public function openAccount()
    {
        return 'Open TPBank account and do: '.$this->account->openAccount();
    }
}
