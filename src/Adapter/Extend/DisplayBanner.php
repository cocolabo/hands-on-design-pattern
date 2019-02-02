<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-02
 * Time: 23:48
 */

namespace App\Adapter\Extend;

class DisplayBanner extends Banner implements Display
{
    public function __construct(string $string)
    {
        parent::__construct($string);
    }

    public function displayWeek()
    {
        parent::showWithParen();
    }

    public function displayStrong()
    {
        parent::showWithAster();
    }
}