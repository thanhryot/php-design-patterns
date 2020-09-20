<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Observer;

use SplSubject;
use SplObserver;

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