<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Mediator;

interface User
{
    public function chat(string $message);

    public function receive(string $message);
}