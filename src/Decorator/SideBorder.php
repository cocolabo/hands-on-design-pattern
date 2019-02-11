<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 23:50
 */

namespace App\Decorator;


class SideBorder extends Border
{
    /** @var string $border_char */
    private $border_char;

    public function __construct(Display $display, string $ch)
    {
        parent::__construct($display);
        $this->border_char = $ch;
    }

    public function getColumns(): int
    {
        return 1 + $this->display->getColumns() + 1;
    }

    public function getRows(): int
    {
        return $this->display->getRows();
    }

    public function getRowText(int $row): string
    {
        return $this->border_char . $this->display->getRowText($row) . $this->border_char;
    }
}