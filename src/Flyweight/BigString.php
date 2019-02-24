<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 18:39
 */

namespace App\Flyweight;


use App\FactoryMethod\Factory;

class BigString
{
    /** @var BigChar[] $big_chars */
    private $big_chars;

    public function __construct(string $string)
    {
        $factory = BigCharFactory::getInstance();

        $string_array = str_split($string);

        for ($i = 0; $i < count($string_array); $i++) {
            $this->big_chars[$i] = $factory->getBigChar($string_array[$i]);
        }
    }

    public function print(): void
    {
        for ($i = 0; $i < count($this->big_chars); $i++) {
            echo '---------------------------------------' . PHP_EOL;
            $this->big_chars[$i]->print();
        }
    }
}