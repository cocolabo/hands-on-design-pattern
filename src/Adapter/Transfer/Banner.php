<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-02
 * Time: 23:30
 */

namespace App\Adapter\Transfer;


class Banner
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function showWithParen()
    {
        echo '(' . $this->string . ')' . PHP_EOL;
    }

    public function showWithAster()
    {
        echo '*' . $this->string . '*' . PHP_EOL;
    }
}