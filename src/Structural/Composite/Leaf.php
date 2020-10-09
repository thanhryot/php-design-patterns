<?php

namespace ThanhRyot\DesignPatterns\Structural\Composite;

class Leaf implements Component
{
    public function operation()
    {
        return 'Leaf';
    }
}
