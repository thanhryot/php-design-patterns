<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Observer;

use SplSubject;
use SplObserver;
use SplObjectStorage;

class User implements SplSubject
{
    private $email;
    private $observers;

    /**
     * UserObserver constructor.
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }


    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @param string $email
     */
    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }
}