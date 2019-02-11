<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 23:47
 */

namespace App\Decorator;


class StringDisplay extends Display
{
    /** @var string $string */
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function getColumns(): int
    {
        return strlen($this->string);
    }

    public function getRows(): int
    {
        return 1;
    }

    public function getRowText(int $row): string
    {
        if($row === 0) {
            return $this->string;
        } else {
            return '';
        }
    }
}