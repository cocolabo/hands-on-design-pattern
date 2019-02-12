<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 22:29
 */

namespace App\Observer;


class DigitObserver implements Observer
{
    public function update(NumberGenerator $generator): void
    {
        echo 'DigitObserver:' . $generator->getNumber() . PHP_EOL;

        sleep(1);
    }
}