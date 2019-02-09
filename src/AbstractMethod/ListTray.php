<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:22
 */

namespace App\AbstractMethod;


class ListTray extends Tray
{
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function makeHTML(): string
    {
        /** @var string $buffer */
        $buffer = null;
        $buffer .= '<li>' . PHP_EOL;
        $buffer .= $this->caption . PHP_EOL;
        $buffer .= '<ul>' . PHP_EOL;

        /** @var Item $tray */
        foreach ($this->tray as $tray) {
            $buffer .= $tray->makeHTML();
        }

        $buffer .= '</ul>' . PHP_EOL;
        $buffer .= '</li>' . PHP_EOL;

        return $buffer;
    }
}