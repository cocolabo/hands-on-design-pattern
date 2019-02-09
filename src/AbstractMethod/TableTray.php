<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:50
 */

namespace App\AbstractMethod;


class TableTray extends Tray
{
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function makeHTML(): string
    {
        /** @var string $buffer */
        $buffer = null;

        $buffer .= '<td>' . PHP_EOL;
        $buffer .= '<table width="100" border="1">' . PHP_EOL;
        $buffer .= '<tr>' . PHP_EOL;

        $colspan = count($this->tray) + 1;
        $buffer .= '<td bgcolor="#cccccc" align="center" colspan="' . $colspan . '"><b>' . $this->caption . '</b></td>' . PHP_EOL;

        $buffer .= '</tr>' . PHP_EOL;
        $buffer .= '<tr>' . PHP_EOL;

        /** @var Item $tray */
        foreach ($this->tray as $tray) {
            $buffer .= $tray->makeHTML();
        }

        $buffer .= '</tr></table>' . PHP_EOL;
        $buffer .= '<td>' . PHP_EOL;

        return $buffer;
    }
}