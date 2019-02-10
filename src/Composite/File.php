<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 17:40
 */

namespace App\Composite;


class File extends Entry
{
    /** @var string $name */
    private $name;

    /** @var int $size */
    private $size;

    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    protected function _printList(string $prefix): void
    {
        echo $prefix . '/' . $this . PHP_EOL;
    }
}