<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 18:07
 */

namespace App\State;

require_once "../../vendor/autoload.php";

$frame = new SafeFrame();
for ($hour = 0; $hour <= 24; $hour++) {
    echo '==========================================' . PHP_EOL;
    $frame->setClock($hour);
    $frame->actionPerformed('button');
    $frame->actionPerformed('alarm');
    $frame->actionPerformed('phone');

    sleep(1);
}
