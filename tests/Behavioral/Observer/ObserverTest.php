<?php

namespace Tests\Behavioral\Observer;

use ThanhRyot\DesignPatterns\Behavioral\Observer\User;
use ThanhRyot\DesignPatterns\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testChangeInUser()
    {
        $observer = new UserObserver();
        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }
}