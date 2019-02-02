<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-02
 * Time: 22:37
 */
namespace App\Iterator;

interface Aggregate
{
    public function iterator(): Iterator;
}