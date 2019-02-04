<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 15:45
 */

namespace App\FactoryMethod;

require_once "../../vendor/autoload.php";

$factory = new IDCardFactory();
$card1 = $factory->create('cocomaru');
$card2 = $factory->create('cocolabo');

$card1->use();
$card2->use();

var_dump($factory->getOwners());
