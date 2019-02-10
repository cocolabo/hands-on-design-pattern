<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 13:17
 */

namespace App\Strategy;


class ProbStrategy implements Strategy
{
    /** @var int $prevHandValue */
    private $prevHandValue = 0;
    /** @var int $currentHandValue */
    private $currentHandValue = 0;

    /** @var int[] $history */
    private $history = [
        [1, 1, 1],
        [1, 1, 1],
        [1, 1, 1],
    ];

    public function nextHand(): Hand
    {
        /** @var int $bet */
        $bet = random_int(0, $this->getSum($this->currentHandValue));

        /** @var int $hand_value */
        $hand_value = 0;

        if ($bet < $this->history[$this->currentHandValue][0]) {
            $hand_value = 0;
        } elseif ($bet < $this->history[$this->currentHandValue][0] + $this->history[$this->currentHandValue][1]) {
            $hand_value = 1;
        } else {
            $hand_value = 2;
        }

        $this->prevHandValue = $this->currentHandValue;
        $this->currentHandValue = $hand_value;

        return Hand::getHand($hand_value);
    }

    private function getSum(int $hv): int
    {
        /** @var int $sum */
        $sum = 0;
        for ($i = 0; $i < 3; $i++) {
            $sum += $this->history[$hv][$i];
        }
        return $sum;
    }

    public function study(bool $win): void
    {
        if ($win) {
            $this->history[$this->prevHandValue][$this->currentHandValue]++;
        } else {
            $this->history[$this->prevHandValue][($this->currentHandValue + 1) % 3]++;
            $this->history[$this->prevHandValue][($this->currentHandValue + 2) % 3]++;
        }
    }
}