<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 17:38
 */

namespace App\ChainOfResponsibility;


class Trouble
{
    /** @var int $number */
    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function __toString()
    {
        return '[Trouble ' . $this->number . ']';
    }
}