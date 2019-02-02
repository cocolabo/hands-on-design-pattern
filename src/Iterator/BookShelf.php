<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-02
 * Time: 22:44
 */

namespace App\Iterator;


class BookShelf implements Aggregate
{
    private $books = [];
    private $last = 0;

    public function iterator(): Iterator
    {
        return new BookShelfIterator($this);
    }

    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book): void
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    public function getLength(): int
    {
        return $this->last;
    }

}