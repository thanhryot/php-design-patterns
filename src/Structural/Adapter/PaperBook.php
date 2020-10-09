<?php

namespace ThanhRyot\DesignPatterns\Structural\Adapter;

class PaperBook implements Book
{
    private $page = 1;

    public function open()
    {
        $this->page = 1;

        return 'Hello, I\'m PaperBook!';
    }

    public function getPage()
    {
        return $this->page;
    }

    public function turnPage()
    {
        return $this->page++;
    }
}
