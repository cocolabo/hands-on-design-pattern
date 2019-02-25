<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 15:25
 */

namespace App\Proxy;


class PrinterProxy implements Printable
{
    /** @var string $name */
    private $name;

    /** @var Printer $real */
    private $real;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setPrinterName(string $name): void
    {
        if ($this->real instanceof Printer) {
            $this->real->setPrinterName($name);
        }

        $this->name = $name;
    }

    public function getPrinterName(): string
    {
        return $this->name;
    }

    public function print(string $string): void
    {
        $this->realize();
        $this->real->print($string);
    }

    private function realize(): void
    {
        if (!$this->real instanceof Printer) {
            $this->real = new Printer($this->name);
        }
    }
}