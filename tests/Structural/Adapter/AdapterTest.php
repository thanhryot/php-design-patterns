<?php

namespace Test\Structural\Adapter;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Structural\Adapter\EbookAdapter;
use ThanhRyot\DesignPatterns\Structural\Adapter\Kindle;
use ThanhRyot\DesignPatterns\Structural\Adapter\PaperBook;

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
