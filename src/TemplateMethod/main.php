<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-02
 * Time: 22:54
 */

namespace App\TemplateMethod;

require_once "../../vendor/autoload.php";

$d1 = new CharDisplay('H');
$d2 = new StringDisplay('Hello, World');
$d3 = new StringDisplay('Hello');

$d1->display();
$d2->display();
$d3->display();