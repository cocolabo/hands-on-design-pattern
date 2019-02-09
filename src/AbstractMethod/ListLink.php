<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:19
 */

namespace App\AbstractMethod;


class ListLink extends Link
{
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    public function makeHTML(): string
    {
        return ' <li><a href="' . $this->url . '">' . $this->caption . '</a></li>';
    }
}