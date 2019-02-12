<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 22:12
 */

namespace App\Mediator;

require_once '../../vendor/autoload.php';

// 管制塔インスタンス
$control_tower = new ControlTower();

// 旅客機インスタンス
$aircraft_1 = new Aircraft('A001便');
$aircraft_2 = new Aircraft('B002便');
$aircraft_3 = new Aircraft('C003便');
$aircraft_4 = new Aircraft('D004便');
$aircraft_5 = new Aircraft('E005便');

// 管制塔がレーダーで旅客機を捕捉しました
$control_tower->discovered($aircraft_1);
$control_tower->discovered($aircraft_2);
$control_tower->discovered($aircraft_3);
$control_tower->discovered($aircraft_4);
$control_tower->discovered($aircraft_5);

echo '------------------------' . PHP_EOL;

// 着陸許可を求める機長たち
$aircraft_1->applyForLanding();
$aircraft_2->applyForLanding();
$aircraft_3->applyForLanding();
$aircraft_4->applyForLanding();
$aircraft_5->applyForLanding();

echo '------------------------'.PHP_EOL;