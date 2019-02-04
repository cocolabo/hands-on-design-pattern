<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 15:40
 */

namespace App\FactoryMethod;


class IDCard extends Product
{
    private $owner;

    public function __construct(string $owner)
    {
        echo $owner . 'のカードを作ります。' . PHP_EOL;
        $this->owner = $owner;
    }

    public function use(): void
    {
        echo $this->owner . 'のカードを使います。' . PHP_EOL;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }
}