<?php

namespace ThanhRyot\DesignPatterns\Structural\Adapter;

class Kindle implements Ebook
{
    private $page = 1;
    private $totalPage = 100;

    public function unlock()
    {
        return 'Hello, I\'m Kindle!';
    }

    public function getPage()
    {
        return [$this->page, $this->totalPage];
    }

    public function pressNext()
    {
        return $this->page++;
    }
}
