<?php

namespace Tests\Behavioral\Mediator;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Behavioral\Mediator\ChatMediator;
use ThanhRyot\DesignPatterns\Behavioral\Mediator\UserImplement;

class MediatorTest extends TestCase
{
    public function testUserInRoomCanGetReceiveMessage()
    {
        $mediator = new ChatMediator();
        $userA = new UserImplement("A", $mediator);
        $userB = new UserImplement("B", $mediator);
        $userC = new UserImplement("C", $mediator);

        $mediator->addUser($userA);
        $mediator->addUser($userB);
        $mediator->addUser($userC);

        // now room include three user: {A, B, C}
        $result = $userB->chat("Hello everyone!");

        $this->assertSame('A receive Hello everyone!B receive Hello everyone!C receive Hello everyone!', $result);
    }
}
