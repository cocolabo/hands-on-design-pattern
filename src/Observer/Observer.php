<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 22:17
 */

namespace App\Observer;


interface Observer
{
    public function update(NumberGenerator $generator): void;
}