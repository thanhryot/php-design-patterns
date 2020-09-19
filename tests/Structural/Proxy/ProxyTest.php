<?php

namespace Test\Structural\Proxy;

use ThanhRyot\DesignPatterns\Structural\Proxy\ProxyImage;
use ThanhRyot\DesignPatterns\Structural\Proxy\RealImage;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testLoadingImage()
    {
        $imageUrl = 'http://www.example.com/image.png';
        $image = new ProxyImage($imageUrl);

        $this->assertSame("Image is loading... :" . $imageUrl, $image->getImage());
        $this->assertSame("Image is loaded! :" . $imageUrl, $image->getImage());
    }

}