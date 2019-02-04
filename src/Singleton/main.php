<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 16:37
 */

namespace App\Singleton;

require_once "../../vendor/autoload.php";

echo 'Start.' . PHP_EOL;

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();

if ($obj1 === $obj2) {
    echo 'obj1とobj2は同じインスタンスです。' . PHP_EOL;
} else {
    echo 'obj1とobj2は同じインスタンスではありません。' . PHP_EOL;
}

echo 'End' . PHP_EOL;
