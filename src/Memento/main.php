<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-18
 * Time: 14:15
 */

namespace App\Memento;

require_once '../../vendor/autoload.php';

try {
    /** @var Gamer $gamer */
    $gamer = new Gamer(100);

    $memento = $gamer->createMemento();

    for ($i = 0; $i < 100; $i++) {
        echo '====' . $i . PHP_EOL;
        echo '現状' . $gamer . PHP_EOL;

        $gamer->bet();

        echo '所持金は' . $gamer->getMoney() . '円になりました。' . PHP_EOL;

        if ($gamer->getMoney() > $memento->getMoney()) {
            echo '   （たいぶ増えたので、現在の状態を保存しておこう）' . PHP_EOL;
            $memento = $gamer->createMemento();
        } else if ($gamer->getMoney() < $memento->getMoney() / 2) {
            echo '   （たいぶ減ったので、以前の状態に復帰しよう）' . PHP_EOL;
            $gamer->restoreMemento($memento);
        }

        sleep(1);
    }

} catch (\RuntimeException $e) {
    var_dump($e->getTraceAsString());
}



