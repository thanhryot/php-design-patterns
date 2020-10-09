<?php

namespace ThanhRyot\DesignPatterns\Behavioral\ChainOfResponsibilities;

abstract class AbstractHandler implements Handler
{
    private $nextHandler;

    public function handle(string $request)
    {
        if ($this->nextHandler !== null) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }

    public function setNext(Handler $handler)
    {
        $this->nextHandler = $handler;

        return $handler;
    }
}
