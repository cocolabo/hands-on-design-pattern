<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 14:48
 */

namespace App\Visitor;


interface Element
{
    public function accept(Visitor $v): void;
}