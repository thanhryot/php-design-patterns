<?php

namespace ThanhRyot\DesignPatterns\Behavioral\ChainOfResponsibilities;

class FuuHandler extends AbstractHandler
{
    public function handle(string $request)
    {
        if ($request === "fuu") {
            return "Handler successfully with " . $request;
        }
        return parent::handle($request);
    }
}