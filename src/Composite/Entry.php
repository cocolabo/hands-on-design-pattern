<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 17:35
 */

namespace App\Composite;


abstract class Entry
{
    abstract public function getName(): string;

    abstract public function getSize(): int;

    public function add(Entry $entry): Entry
    {
        throw new FileTreatmentException();
    }

    public function printList()
    {
        $this->_printList("");
    }

    abstract protected function _printList(string $prefix): void;

    public function __toString(): string
    {
        return $this->getName() . ' (' . $this->getSize() . ')';
    }
}