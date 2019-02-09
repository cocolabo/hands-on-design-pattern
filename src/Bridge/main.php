<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 23:18
 */

namespace App\Bridge;

require_once "../../vendor/autoload.php";

/** @var Display $d1 */
$d1 = new Display(new StringDisplayImpl("Hello, Japan."));

/** @var Display $d2 */
$d2 = new CountDisplay(new StringDisplayImpl("Hello, World."));

/** @var CountDisplay $d3 */
$d3 = new CountDisplay(new StringDisplayImpl("Hello, Universe."));

$d1->display();
$d2->display();
$d3->display();
$d3->multiDisplay(5);