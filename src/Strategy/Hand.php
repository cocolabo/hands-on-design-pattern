<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 23:26
 */

namespace App\Strategy;


class Hand
{
    const HAND_VALUE_GUU = 0;
    const HAND_VALUE_CHO = 1;
    const HAND_VALUE_PAA = 2;

    /** @var Hand[] $hand */
    public static $hand = [];

    const NAME = ["グー", "チョキ", "パー"];

    /** @var int $hand_value */
    private $hand_value;

    private function __construct(int $hand_value)
    {
        $this->hand_value = $hand_value;
    }

    public static function getHand(int $hand_value): Hand
    {
        if (!isset(self::$hand[$hand_value])) {
            self::$hand[$hand_value] = new static($hand_value);
        }
        return self::$hand[$hand_value];
    }

    private function fight(Hand $h)
    {
        if ($this->hand_value == $h->hand_value) {
            return 0;
        } elseif ($this->hand_value + 1 % 3 == $h->hand_value) {
            return 1;
        } else {
            return -1;
        }
    }

    public function isStrongerThan(Hand $h): bool
    {
        return $this->fight($h) == 1;
    }

    public function isWeakerThan(Hand $h): bool
    {
        return $this->fight($h) == -1;
    }

    public function toString()
    {
        return self::NAME[$this->hand_value];
    }
}