<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 17:10
 */

namespace App\AbstractMethod;


abstract class Link extends Item
{
    /** @var string $url */
    protected $url;

    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption);
        $this->url = $url;
    }
}