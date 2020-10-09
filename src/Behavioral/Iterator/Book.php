<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Iterator;

class Book
{
    protected $title;
    protected $author;

    public function __construct(string $title, string $author)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getDescription()
    {
        return $this->title.' by '.$this->author;
    }
}
