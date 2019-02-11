<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 14:48
 */

namespace App\Visitor;


class Directory extends Entry
{
    /** @var string $name */
    private $name;

    /** @var array $directory */
    private $directory = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        /** @var int $size */
        $size = 0;

        /** @var Entry $directory */
        foreach ($this->directory as $directory) {
            $size += $directory->getSize();
        }

        return $size;
    }

    public function add(Entry $entry): Entry
    {
        $this->directory[] = $entry;
        return $this;
    }

    public function getAll(): array
    {
        return $this->directory;
    }


    public function accept(Visitor $v): void
    {
        $v->visit($this);
    }
}