<?php

namespace ThanhRyot\DesignPatterns\Behavioral\ChainOfResponsibilities;

class BarHandler extends AbstractHandler
{
    public function handle(string $request)
    {
        if ($request === 'bar') {
            return 'Handler successfully with '.$request;
        }

        return parent::handle($request);
    }
}
