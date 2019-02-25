<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 15:59
 */

namespace App\Command;

require_once "../../vendor/autoload.php";

/** @var Invoker $invoker */
$invoker = new Invoker();

/** @var Receiver $receiver */
$receiver = new Receiver();

$invoker->setCommand(new HelloCommand($receiver));
$invoker->run();
echo $receiver->getOutput() . PHP_EOL;
