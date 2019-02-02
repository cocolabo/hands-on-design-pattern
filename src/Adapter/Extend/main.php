<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-02
 * Time: 22:54
 */

namespace App\Adapter\Extend;

require_once "../../../vendor/autoload.php";

$p = new DisplayBanner("Hello");
$p->displayWeek();
$p->displayStrong();