<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 22:10
 */

namespace App\Prototype;


class MessageBox implements Product
{
    private $decochar;

    public function __construct(string $decochar)
    {
        $this->decochar = $decochar;
    }

    public function use(string $s): void
    {
        $length = strlen($s);

        for ($i = 0; $i < $length; $i++) {
            echo $this->decochar;
        }
        echo PHP_EOL;

        echo $this->decochar . " " . $s . " " . $this->decochar . PHP_EOL;

        for ($i = 0; $i < $length; $i++) {
            echo $this->decochar;
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