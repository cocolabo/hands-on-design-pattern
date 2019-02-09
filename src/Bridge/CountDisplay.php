<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 23:12
 */

namespace App\Bridge;


class CountDisplay extends Display
{
    public function __construct(DisplayImpl $impl)
    {
        parent::__construct($impl);
    }

    public function multiDisplay(int $times): void
    {
        $this->open();
        for ($i = 0; $i <= $times; $i++) {
            $this->print();
        }
        $this->close();
    }
}