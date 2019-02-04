<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 15:42
 */

namespace App\FactoryMethod;


class IDCardFactory extends Factory
{
    private $owners = [];

    protected function createProduct(string $owner): Product
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product): void
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners(): array
    {
        return $this->owners;
    }
}