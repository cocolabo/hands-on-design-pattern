<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 15:53
 */

namespace App\Command;


interface CommandInterface
{
    public function execute(): void;

}