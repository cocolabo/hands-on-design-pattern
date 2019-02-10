<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 17:48
 */

namespace App\Composite;


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

    protected function _printList(string $prefix): void
    {
        echo $prefix . '/' . $this . PHP_EOL;

        /** @var Entry $directory */
        foreach ($this->directory as $directory) {
            $directory->_printList($prefix . '/' . $this->name);
        }
    }

}