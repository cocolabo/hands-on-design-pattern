<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 23:14
 */

namespace App\Bridge;


class StringDisplayImpl extends DisplayImpl
{
    /** @var string $string */
    private $string;

    /** @var int $width */
    private $width;

    public function __construct(string $string)
    {
        $this->string = $string;
        $this->width = strlen($string);
    }

    public function rawOpen(): void
    {
        $this->printLine();
    }

    public function rawPrint(): void
    {
        echo '|' . $this->string . '|' . PHP_EOL;
    }

    public function rawClose(): void
    {
        $this->printLine();
    }

    private function printLine(): void
    {
        echo '+';
        for ($i = 0; $i <= $this->width; $i++) {
            echo '-';
        }
        echo '+' . PHP_EOL;
    }
}