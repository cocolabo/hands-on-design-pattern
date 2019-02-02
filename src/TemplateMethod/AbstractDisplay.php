<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-03
 * Time: 00:14
 */

namespace App\TemplateMethod;


abstract class AbstractDisplay
{
    abstract public function open();

    abstract public function print();

    abstract public function close();

    final public function display()
    {
        $this->open();

        for ($i = 0; $i < 5; $i++) {
            $this->print();
        }

        $this->close();
    }
}