<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 22:27
 */

namespace App\Observer;


class RandomNumberGenerator extends NumberGenerator
{
    /** @var int $number */
    private $number;

    public function getNumber(): int
    {
        return $this->number;
    }

    public function execute(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $this->number = random_int(0, 50);
            $this->notifyObservers();
        }
    }
}