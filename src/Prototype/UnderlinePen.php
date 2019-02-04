<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 22:10
 */

namespace App\Prototype;


class UnderlinePen implements Product
{
    private $ulchar;

    public function __construct(string $ulchar)
    {
        $this->ulchar = $ulchar;
    }

    public function use(string $s): void
    {
        echo '"' . $s . '"' . PHP_EOL;

        $length = strlen($s);

        echo " ";

        for ($i = 0; $i < $length; $i++) {
            echo $this->ulchar;
        }

        echo PHP_EOL;
    }

    public function createClone(): Product
    {
        $p = null;

        try {
            $p = clone $this;
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }

        return $p;
    }

}