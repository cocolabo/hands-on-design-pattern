<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 22:15
 */

namespace App\Prototype;

require_once "../../vendor/autoload.php";

// 準備
$manager = new Manager();
$upen = new UnderlinePen('~');
$mbox = new MessageBox('*');
$sbox = new MessageBox('/');

$manager->register("strong message", $upen);
$manager->register("warning box", $mbox);
$manager->register("slash box", $sbox);

// 生成
$p1 = $manager->create("strong message");
$p1->use("Hello, world.");

$p2 = $manager->create("warning box");
$p2->use("Hello, world.");


$p2 = $manager->create("slash box");
$p2->use("Hello, world.");
