<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 21:49
 */

namespace App\Facade;

use App\Facade\PageMaker\PageMaker;

require_once '../../vendor/autoload.php';

PageMaker::makeWelcomePage('cocolabo@coco-lb.com','welcome.html');