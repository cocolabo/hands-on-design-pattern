<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 19:23
 */

namespace App\ChainOfResponsibility;


class LimitSupport extends Support
{
    /** @var int $limit */
    private $limit;

    public function __construct(string $name, int $limit)
    {
        parent::__construct($name);
        $this->limit = $limit;
    }

    protected function resolve(Trouble $trouble): bool
    {
        if ($trouble->getNumber() < $this->limit) {
            return true;
        } else {
            return false;
        }
    }
}