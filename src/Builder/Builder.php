<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 09:01
 */

namespace App\Builder;


abstract class Builder
{
    abstract public function makeTitle(string $title): void;

    abstract public function makeString(string $str): void;

    abstract public function makeItems(array $items): void;

    abstract public function close(): void;
}