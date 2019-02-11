<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 19:22
 */

namespace App\ChainOfResponsibility;


class NoSupport extends Support
{
    protected function resolve(Trouble $trouble): bool
    {
        return false;
    }
}