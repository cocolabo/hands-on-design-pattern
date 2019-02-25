<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 15:19
 */

namespace App\Proxy;


interface Printable
{
    public function setPrinterName(string $name): void;

    public function getPrinterName(): string;

    public function print(string $string): void;
}