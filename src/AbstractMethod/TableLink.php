<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:49
 */

namespace App\AbstractMethod;


class TableLink extends Link
{
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    public function makeHTML(): string
    {
        return '<td><a href="' . $this->url . '">' . $this->caption . '</a></td>' . PHP_EOL;
    }
}