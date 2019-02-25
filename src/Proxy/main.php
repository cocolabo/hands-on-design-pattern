<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 15:29
 */

namespace App\Proxy;

require_once "../../vendor/autoload.php";

/** @var PrinterProxy $p */
$p = new PrinterProxy("Alice");
echo '名前は現在' . $p->getPrinterName() . 'です。' . PHP_EOL;
$p->setPrinterName('Bob');
echo '名前は現在' . $p->getPrinterName() . 'です。' . PHP_EOL;
$p->print('Hello World!');