<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 23:41
 */

namespace App\Strategy;


interface Strategy
{
    public function nextHand(): Hand;

    public function study(bool $win): void;
}