<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 17:56
 */

namespace App\State;


class SafeFrame implements Context
{
    /** @var State $state */
    private $state;

    public function __construct()
    {
        $this->state = DayState::getInstance();
    }

    public function actionPerformed(string $action): void
    {
        if ($action === 'button') {
            $this->state->doUse($this);
        } elseif ($action === 'alarm') {
            $this->state->doAlarm($this);
        } elseif ($action === 'phone') {
            $this->state->doPhone($this);
        } elseif ($action === 'exit') {
            echo 'System Exit...' . PHP_EOL;
            exit(0);
        } else {
            echo '?' . PHP_EOL;
        }
    }

    public function setClock(int $hour): void
    {
        /** @var string $clock_string */
        $clock_string = sprintf('現在時刻は%02d:00', $hour);

        echo $clock_string . PHP_EOL;
        $this->state->doClock($this, $hour);
    }

    public function changeState(State $state): void
    {
        echo $this->state . 'から' . $state . 'へ状態が変化しました。' . PHP_EOL;
        $this->state = $state;
    }

    public function callSecurityCenter(string $msg): void
    {
        echo 'call!' . $msg . PHP_EOL;
    }

    public function recordLog(string $msg): void
    {
        echo 'record ...' . $msg . PHP_EOL;
    }
}