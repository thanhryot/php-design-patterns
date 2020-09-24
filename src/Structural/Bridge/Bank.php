<?php

namespace ThanhRyot\DesignPatterns\Structural\Bridge;

abstract class Bank
{
    protected $account;

    public function __construct(Account $account)
    {
        $this->account = $account;
    }
}
