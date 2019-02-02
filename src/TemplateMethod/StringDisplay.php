<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-03
 * Time: 00:17
 */

namespace App\TemplateMethod;


class StringDisplay extends AbstractDisplay
{
    private $string;
    private $width;

    public function __construct(string $string)
    {
        $this->string = $string;
        $this->width = strlen($string);
    }

    public function open()
    {
        $this->printLine();
    }

    public function print()
    {
        echo '|' . $this->string . '|' . PHP_EOL;
    }

    public function close()
    {
        $this->printLine();
    }

    private function printLine()
    {
        echo '+';
        for ($i = 0; $i < $this->width; $i++) {
            echo '-';
        }
        echo '+' . PHP_EOL;
    }
}