<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 17:40
 */

namespace App\ChainOfResponsibility;

abstract class Support
{
    /** @var string $name */
    private $name;

    /** @var Support $next */
    private $next;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setNext(Support $next): Support
    {
        $this->next = $next;
        return $next;
    }

    public final function support(Trouble $trouble)
    {
        if ($this->resolve($trouble)) {
            $this->done($trouble);
        } elseif ($this->next != null) {
            $this->next->support($trouble);
        } else {
            $this->fail($trouble);
        }
    }

    abstract protected function resolve(Trouble $trouble): bool;

    protected function done(Trouble $trouble): void
    {
        echo $trouble . ' is resolved by [' . $this->name . '].' . PHP_EOL;
    }

    protected function fail(Trouble $trouble): void
    {
        echo $trouble . ' cannot be resolved.' . PHP_EOL;
    }


}