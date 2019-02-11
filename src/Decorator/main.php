<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 23:58
 */

namespace App\Decorator;

require_once '../../vendor/autoload.php';

/** @var Display $b1 */
$b1 = new StringDisplay("Hello, world.");

/** @var Display $b2 */
$b2 = new SideBorder($b1, '#');

/** @var Display $b3 */
$b3 = new FullBorder($b2);

$b1->show();
$b2->show();
$b3->show();