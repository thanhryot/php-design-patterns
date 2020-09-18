<?php

namespace ThanhRyot\DesignPatterns\Structural\Bridge;

class CheckingAccount implements Account
{
    public function openAccount()
    {
        return "Check Account";
    }
}