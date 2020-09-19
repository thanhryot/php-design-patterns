<?php

namespace Test\Structural\Bridge;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Structural\Bridge\BlockAccount;
use ThanhRyot\DesignPatterns\Structural\Bridge\CheckingAccount;
use ThanhRyot\DesignPatterns\Structural\Bridge\VPBank;

class BridgeTest extends TestCase
{
    public function testCanCheckAccountWithTPBank()
    {
        $bank = new VPBank(new CheckingAccount());
        $this->assertSame('Open VPBank account and do: Check Account', $bank->openAccount());
    }

    public function testCanBlockAccountWithVPBank()
    {
        $bank = new VPBank(new BlockAccount());
        $this->assertSame('Open VPBank account and do: Block Account', $bank->openAccount());
    }
}
