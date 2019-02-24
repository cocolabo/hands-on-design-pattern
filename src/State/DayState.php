<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 17:34
 */

namespace App\State;


class DayState implements State
{
    /** @var DayState $singleton */
    private static $singleton = null;

    private function __construct()
    {
    }

    public static function getInstance(): DayState
    {
        if (!static::$singleton) {
            static::$singleton = new static();
        }
        return static::$singleton;
    }

    public function doClock(Context $context, int $hour): void
    {
        if ($hour < 9 || 17 <= $hour) {
            $context->changeState(NightState::getInstance());
        }
    }

    public function doUse(Context $context): void
    {
        $context->recordLog('金庫使用（昼間）');
    }

    public function doAlarm(Context $context): void
    {
        $context->callSecurityCenter('非常ベル（昼間）');
    }

    public function doPhone(Context $context): void
    {
        $context->callSecurityCenter('通常の通話（昼間）');
    }

    public function __toString(): string
    {
        return '[昼間]';
    }
}