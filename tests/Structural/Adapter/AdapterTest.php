<?php

namespace Test\Structural\Adapter;

use ThanhRyot\DesignPatterns\Structural\Adapter\PaperBook;
use ThanhRyot\DesignPatterns\Structural\Adapter\Kindle;
use ThanhRyot\DesignPatterns\Structural\Adapter\EbookAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testPaperBook()
    {
        $paperBook = new PaperBook();
        $paperBook->open();
        $paperBook->turnPage();
        $this->assertSame(2, $paperBook->getPage());
    }

    public function testEbookAdapter()
    {
        $ebook = new Kindle();
        $book = new EbookAdapter($ebook);
        $book->open();
        $book->turnPage();
        $this->assertSame(2, $book->getPage());
    }
}