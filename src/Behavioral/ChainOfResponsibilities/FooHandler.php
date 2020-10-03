<?php

namespace ThanhRyot\DesignPatterns\Behavioral\ChainOfResponsibilities;

class FooHandler extends AbstractHandler
{
    public function handle(string $request)
    {
        if ($request === 'foo') {
            return 'Handler successfully with ' . $request;
        }
        return parent::handle($request);
    }

}