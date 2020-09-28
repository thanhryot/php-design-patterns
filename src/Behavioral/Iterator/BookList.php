<?php

namespace ThanhRyot\DesignPatterns\Behavioral\Iterator;

use Iterator;
use Countable;

class BookList implements Iterator, Countable
{
    private $collection;
    private $index = 0;

    public function add(Book $book)
    {
        $this->collection[] = $book;
    }

    public function remove(Book $book)
    {
        foreach ($this->collection as $key => $item) {
            if ($item == $book) unset($this->collection[$key]);
        }
        // restore key sort
        $this->collection = array_values($this->collection);
    }

    public function current()
    {
        return $this->collection[$this->index];
    }

    public function next()
    {
        $this->index++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->collection[$this->index]);
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function count()
    {
        return count($this->collection);
    }
}
