<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 09:07
 */

namespace App\Builder;


class TextBuilder extends Builder
{
    /** @var string $buffer*/
    private $buffer = null;

    public function makeTitle(string $title): void
    {
        $this->buffer .= '========================================' . PHP_EOL;
        $this->buffer .= '「' . $title . '」' . PHP_EOL;
        $this->buffer .= PHP_EOL;
    }

    public function makeString(string $str): void
    {
        $this->buffer .= '■' . $str . PHP_EOL;
        $this->buffer .= PHP_EOL;
    }

    public function makeItems(array $items): void
    {
        foreach ($items as $item) {
            $this->buffer .= ' ・' . $item . PHP_EOL;
        }
        $this->buffer .= PHP_EOL;
    }

    public function close(): void
    {
        $this->buffer .= '========================================' . PHP_EOL;
    }

    public function getResult()
    {
        return $this->buffer;
    }
}