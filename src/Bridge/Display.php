<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 23:10
 */

namespace App\Bridge;


class Display
{
    /** @var DisplayImpl $impl */
    private $impl;

    public function __construct(DisplayImpl $impl)
    {
        $this->impl = $impl;
    }

    public function open(): void
    {
        $this->impl->rawOpen();
    }

    public function print(): void
    {
        $this->impl->rawPrint();
    }

    public function close(): void
    {
        $this->impl->rawClose();
    }

    final public function display():void
    {
        $this->open();
        $this->print();
        $this->close();
    }
}