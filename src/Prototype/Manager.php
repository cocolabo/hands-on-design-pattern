<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 22:05
 */

namespace App\Prototype;


class Manager
{
    private $showcase;

    public function register(string $name, Product $proto)
    {
        $this->showcase[$name] = $proto;
    }

    public function create(string $protoname): Product
    {
        $p = $this->showcase[$protoname];

        return $p->createClone();
    }
}