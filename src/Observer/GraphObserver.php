<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 22:30
 */

namespace App\Observer;


class GraphObserver implements Observer
{
    public function update(NumberGenerator $generator): void
    {
        echo 'GraphObserver:';

        /** @var int $count */
        $count = $generator->getNumber();

        for ($i = 0; $i < $count; $i++) {
            echo '*';
        }

        echo PHP_EOL;

        sleep(1);
    }
}