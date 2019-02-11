<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 23:45
 */

namespace App\Decorator;


abstract class Display
{
    abstract public function getColumns(): int;

    abstract public function getRows(): int;

    abstract public function getRowText(int $row): string;

    public final function show(): void
    {
        for ($i = 0; $i < $this->getRows(); $i++) {
            echo $this->getRowText($i) . PHP_EOL;
        }
    }
}