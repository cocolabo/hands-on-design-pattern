<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 17:45
 */

namespace App\State;


interface Context
{
    public function setClock(int $hour): void;

    public function changeState(State $state): void;

    public function callSecurityCenter(string $msg): void;

    public function recordLog(string $msg): void;
}