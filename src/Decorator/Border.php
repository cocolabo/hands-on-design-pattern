<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 23:49
 */

namespace App\Decorator;


abstract class Border extends Display
{
    /** @var Display $display */
    protected $display;

    public function __construct(Display $display)
    {
        $this->display = $display;
    }
}