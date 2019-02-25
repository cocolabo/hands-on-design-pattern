<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 15:58
 */

namespace App\Command;


class Invoker
{
    /** @var CommandInterface $command */
    private $command;

    public function setCommand(CommandInterface $command): void
    {
        $this->command = $command;
    }

    public function run(): void
    {
        $this->command->execute();
    }
}