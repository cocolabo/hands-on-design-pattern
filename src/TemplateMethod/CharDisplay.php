<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-03
 * Time: 00:17
 */

namespace App\TemplateMethod;


class CharDisplay extends AbstractDisplay
{
    private $ch;

    public function __construct(string $ch)
    {
        $this->ch = $ch;
    }

    public function open()
    {
        echo '<<';
    }

    public function print()
    {
        echo $this->ch;
    }

    public function close()
    {
        echo '>>' . PHP_EOL;
    }
}