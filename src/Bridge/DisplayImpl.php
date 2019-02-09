<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 23:14
 */

namespace App\Bridge;


abstract class DisplayImpl
{
    abstract public function rawOpen(): void;

    abstract public function rawPrint(): void;

    abstract public function rawClose(): void;
}