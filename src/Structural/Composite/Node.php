<?php

namespace ThanhRyot\DesignPatterns\Structural\Composite;

/**
 * Composite.
 */
class Node implements Component
{
    protected $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    public function operation()
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }

        return implode(' - ', $results);
    }

    public function add(Component $component)
    {
        $this->children->attach($component);
    }

    public function remove(Component $component)
    {
        $this->children->detach($component);
    }
}
