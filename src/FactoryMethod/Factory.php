<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 15:36
 */

namespace App\FactoryMethod;


abstract class Factory
{
    abstract protected function createProduct(string $owner): Product;

    abstract protected function registerProduct(Product $product): void;

    final public function create(string $owner): Product
    {
        $p = $this->createProduct($owner);
        $this->registerProduct($p);

        return $p;
    }

}