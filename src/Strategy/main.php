<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 13:30
 */

namespace App\Strategy;

require_once "../../vendor/autoload.php";

/** @var Player $player1 */
$player1 = new Player("Taro", new WinningStrategy());
/** @var Player $player2 */
$player2 = new Player("Hana", new ProbStrategy());

for ($i = 0; $i < 10000; $i++) {
    /** @var Hand $next_hand1 */
    $next_hand1 = $player1->nextHand();
    /** @var Hand $next_hand2 */
    $next_hand2 = $player2->nextHand();

    if ($next_hand1->isStrongerThan($next_hand2)) {
        echo 'Winner:' . $player1 . PHP_EOL;
        $player1->win();
        $player2->lose();
    } else if ($next_hand2->isStrongerThan($next_hand1)) {
        echo 'Winner:' . $player2 . PHP_EOL;
        $player1->lose();
        $player2->win();
    } else {
        echo 'Even...' . PHP_EOL;
        $player1->even();
        $player2->even();
    }
}

echo 'Total result:' . PHP_EOL;
echo $player1->getResult() . PHP_EOL;
echo $player2->getResult() . PHP_EOL;