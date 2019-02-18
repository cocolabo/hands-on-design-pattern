<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-18
 * Time: 14:02
 */

namespace App\Memento;


class Memento
{
    /** @var int $money */
    private $money = 0;

    /** @var array $fruits */
    private $fruits = [];

    public function getMoney(): int
    {
        return $this->money;
    }

    public function __construct(int $money)
    {
        $this->money = $money;
    }

    public function addFruit(string $fruit)
    {
        $this->fruits[] = $fruit;
        return $this;
    }

    public function getFruits(): array
    {
        return $this->fruits;
    }
}