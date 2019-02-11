<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 19:25
 */

namespace App\ChainOfResponsibility;


class SpecialSupport extends Support
{
    /** @var int $number */
    private $number;

    public function __construct(string $name, int $number)
    {
        parent::__construct($name);
        $this->number = $number;
    }

    protected function resolve(Trouble $trouble): bool
    {
        if ($trouble->getNumber() === $this->number) {
            return true;
        } else {
            return false;
        }
    }
}