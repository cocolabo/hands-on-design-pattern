<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 17:34
 */

namespace App\State;


class NightState implements State
{
    /** @var DayState $singleton */
    private static $singleton = null;

    private function __construct()
    {
    }

    public static function getInstance(): NightState
    {
        if (!static::$singleton) {
            static::$singleton = new static();
        }
        return static::$singleton;
    }

    public function doClock(Context $context, int $hour): void
    {
        if (9 <= $hour && $hour < 17) {
            $context->changeState(DayState::getInstance());
        }
    }

    public function doUse(Context $context): void
    {
        $context->recordLog('非常：夜間の金庫使用');
    }

    public function doAlarm(Context $context): void
    {
        $context->callSecurityCenter('非常ベル（夜間）');
    }

    public function doPhone(Context $context): void
    {
        $context->callSecurityCenter('夜間の通話録音');
    }

    public function __toString(): string
    {
        return '[夜間]';
    }


}