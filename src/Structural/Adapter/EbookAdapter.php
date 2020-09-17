<?php

namespace ThanhRyot\DesignPatterns\Structural\Adapter;

class EbookAdapter implements Book
{
    protected $ebook;

    public function __construct(Ebook $ebook)
    {
        $this->ebook = $ebook;
    }

    public function open()
    {
        $this->ebook->unlock();
    }

    public function getPage()
    {
        return $this->ebook->getPage()[0];
    }

    public function turnPage()
    {
        $this->ebook->pressNext();
    }
}