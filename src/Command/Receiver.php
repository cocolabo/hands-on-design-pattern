<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 15:55
 */

namespace App\Command;


class Receiver
{
    /** @var bool $enable_date */
    private $enable_date = false;

    /** @var string[] $output */
    private $output = [];

    public function write(string $str): void
    {
        if ($this->enable_date) {
            $str .= '[' . date('Y-m-d') . ']';
        }
        $this->output[] = $str;
    }

    public function getOutput(): string
    {
        return join(PHP_EOL, $this->output);
    }

    public function enableDate(): void
    {
        $this->enable_date = true;
    }

    public function disableDate(): void
    {
        $this->enable_date = false;
    }
}