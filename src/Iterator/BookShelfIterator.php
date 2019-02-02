<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-02
 * Time: 22:49
 */

namespace App\Iterator;


class BookShelfIterator implements Iterator
{
    private $bookShelf;
    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    public function hasNext(): bool
    {
        if($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

    public function next(): Book
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;

        return $book;
    }



}