<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{
    private $changedUsers = [];

    /**
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    public function getChangedUsers()
    {
        return $this->changedUsers;
    }
}
