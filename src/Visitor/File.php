<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 14:48
 */

namespace App\Visitor;


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

    public function accept(Visitor $v): void
    {
        $v->visit($this);
    }
}