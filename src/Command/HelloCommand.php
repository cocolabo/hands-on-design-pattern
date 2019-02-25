<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 15:54
 */

namespace App\Command;


class HelloCommand implements CommandInterface
{
    /** @var Receiver $receiver */
    private $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute(): void
    {
        $this->receiver->write('Hello World');
    }
}