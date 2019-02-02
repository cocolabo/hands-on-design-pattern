<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-03
 * Time: 00:04
 */

namespace App\Adapter\Transfer;

abstract class Display
{
    abstract public function displayWeek();

    abstract public function displayStrong();
}