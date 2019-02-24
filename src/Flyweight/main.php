<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 18:44
 */

namespace App\Flyweight;

require_once "../../vendor/autoload.php";

/** @var BigString $bs */
$bs = new BigString('1234567890-');
$bs->print();