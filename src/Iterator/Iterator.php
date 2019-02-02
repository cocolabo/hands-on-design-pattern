<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-02
 * Time: 22:40
 */

namespace App\Iterator;

interface Iterator
{
    public function hasNext(): bool;

    public function next(): Book;
}