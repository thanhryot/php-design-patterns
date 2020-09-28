<?php

namespace ThanhRyot\DesignPatterns\Behavioral\ChainOfResponsibilities;

interface Handler
{
    public function handle(string $request);

    public function setNext(Handler $handler);
}