<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Mediator;

class UserImplement implements User
{
    protected $name;
    protected $mediator;

    public function __construct(string $name, Mediator $mediator)
    {
        $this->name = $name;
        $this->mediator = $mediator;
    }

    public function chat(string $message)
    {
        return $this->mediator->send($message);
    }

    public function receive(string $message)
    {
        return $this->name.' receive '.$message;
    }
}
