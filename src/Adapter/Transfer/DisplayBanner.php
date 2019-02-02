<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-03
 * Time: 00:05
 */

namespace App\Adapter\Transfer;


class DisplayBanner extends Display
{
    private $banner;

    public function __construct(string $string)
    {
        $this->banner = new Banner($string);
    }

    public function displayWeek()
    {
        $this->banner->showWithParen();
    }

    public function displayStrong()
    {
        $this->banner->showWithAster();
    }
}