<?php

namespace Tests\Behavioral\Observer;

use PHPUnit\Framework\TestCase;
use ThanhRyot\DesignPatterns\Behavioral\Iterator\Book;
use ThanhRyot\DesignPatterns\Behavioral\Iterator\BookList;

class IteratorTest extends TestCase
{
    public function testCanIteratorBookList()
    {
        $book1 = new Book('Foo', 'A');
        $book2 = new Book('Bar', 'B');
        $book3 = new Book('Fuu', 'C');

        $bookList = new BookList();
        $bookList->add($book1);
        $bookList->add($book2);
        $bookList->add($book3);

        $bookList->remove($book2);

        $titleList = [];
        foreach ($bookList as $book) {
            $titleList[] = $book->getTitle();
        }

        $result = implode(' - ', $titleList);
        $this->assertSame('Foo - Fuu', $result);
    }
}
