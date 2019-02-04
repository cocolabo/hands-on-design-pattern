<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 22:03
 */

namespace App\Prototype;


interface Product
{
    public function use(string $s): void;

    public function createClone(): Product;

}