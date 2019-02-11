<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 19:26
 */

namespace App\ChainOfResponsibility;

require_once '../../vendor/autoload.php';

/** @var Support $alice */
$alice = new NoSupport('Alice');

/** @var Support $bob */
$bob = new LimitSupport('Bob', 100);

/** @var Support $charlie */
$charlie = new SpecialSupport('Charlie', 429);

/** @var Support $diana */
$diana = new LimitSupport('Diana', 200);

/** @var Support $elmo */
$elmo = new OddSupport('Elmo');

/** @var Support $fred */
$fred = new LimitSupport('Fled', 300);

// 連鎖の形成
$alice->setNext($bob)->setNext($charlie)->setNext($diana)->setNext($elmo)->setNext($fred);

//さまざまなトラブル発生
for ($i = 0; $i < 500; $i += 33) {
    $alice->support(new Trouble($i));
}

