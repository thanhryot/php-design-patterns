<?php

namespace ThanhRyot\DesignPatterns\Structural\Proxy;

class RealImage implements Image
{
    public $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getImage()
    {
        return $this->url;
    }
}
