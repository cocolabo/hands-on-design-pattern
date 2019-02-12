<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 22:33
 */

namespace App\Observer;

require_once '../../vendor/autoload.php';

/** @var NumberGenerator $generator */
$generator = new RandomNumberGenerator();

/** @var Observer $observer1 */
$observer1 = new DigitObserver();

/** @var Observer $observer2 */
$observer2 = new GraphObserver();

$generator->addObserver($observer1);
$generator->addObserver($observer2);

$generator->execute();