<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 14:48
 */

namespace App\Visitor;

abstract class Entry implements Element
{
    abstract public function getName(): string;

    abstract public function getSize(): int;

    public function add(Entry $entry): Entry
    {
        throw new FileTreatmentException();
    }

    public function getAll(): array
    {
        throw new FileTreatmentException();
    }

    public function __toString(): string
    {
        return $this->getName() . ' (' . $this->getSize() . ')';
    }

}