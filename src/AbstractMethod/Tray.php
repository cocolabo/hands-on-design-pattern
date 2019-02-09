<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 17:11
 */

namespace App\AbstractMethod;


abstract class Tray extends Item
{
    /** @var array $tray */
    protected $tray = [];

    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function add(Item $item)
    {
        $this->tray[] = $item;
    }
}