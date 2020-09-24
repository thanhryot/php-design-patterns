<?php

namespace ThanhRyot\DesignPatterns\Structural\Proxy;

class ProxyImage implements Image
{
    protected $url;
    protected $image;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getImage()
    {
        if ($this->image == null) {
            $this->image = new RealImage($this->url);

            return 'Image is loading... :'.$this->image->getImage();
        }

        return 'Image is loaded! :'.$this->image->getImage();
    }
}
