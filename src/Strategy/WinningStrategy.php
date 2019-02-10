<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 23:44
 */

namespace App\Strategy;


class WinningStrategy implements Strategy
{
    private $won = false;

    /** @var Hand $prevHand */
    private $prevHand;

    public function nextHand(): Hand
    {
        if (!$this->won) {
            $this->prevHand = Hand::getHand(random_int(0, 2));
        }

        return $this->prevHand;
    }

    public function study(bool $win): void
    {
        $this->won = $win;
    }
}