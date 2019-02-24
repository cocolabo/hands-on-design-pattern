<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 17:31
 */

namespace App\State;


interface State
{
    public function doClock(Context $context, int $hour): void;
    public function doUse(Context $context): void;
    public function doAlarm(Context $context): void;
    public function doPhone(Context $context): void;
}