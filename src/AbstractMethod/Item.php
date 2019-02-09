<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 17:08
 */

namespace App\AbstractMethod;


abstract class Item
{
    /** @var string $caption */
    protected $caption;

    public function __construct(string $caption)
    {
        $this->caption = $caption;
    }

    abstract public function makeHTML(): string;
}