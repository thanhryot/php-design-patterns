<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Mediator;

use SplObjectStorage;

class ChatMediator implements Mediator
{
    protected $room;

    public function __construct()
    {
        $this->room = new SplObjectStorage();
    }

    public function send(string $message)
    {
        $result = '';
        foreach ($this->room as $user) {
            $result .= $user->receive($message);
        }
        return $result;
    }

    public function addUser(User $user)
    {
        $this->room->attach($user);
    }

    public function removeUser(User $user)
    {
        $this->room->detach($user);
    }
}