<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 19:25
 */

namespace App\ChainOfResponsibility;


class OddSupport extends Support
{
    protected function resolve(Trouble $trouble): bool
    {
        if ($trouble->getNumber() % 2 === 1) {
            return true;
        } else {
            return false;
        }
    }
}