<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:10
 */

namespace App\AbstractMethod;

require_once "../../vendor/autoload.php";

if ($argc != 2) {
    echo 'Usage: php main.php class.name.of.ConcreateFactory' . PHP_EOL;
    echo 'Example 1: php main.php \'App\\AbstractMethod\\ListFactory\'' . PHP_EOL;
    echo 'Example 2: php main.php \'App\\AbstractMethod\\TableFactory\'' . PHP_EOL;
    exit(1);
}

$factory = Factory::getFactory($argv[1]);

/** @var Link $asahi */
$asahi = $factory->createLink("朝日新聞", "http://www.asahi.com/");

/** @var Link $yomiuri */
$yomiuri = $factory->createLink("読売新聞", "http://www.yomiuri.co.jp/");

/** @var Link $asahi */
$us_yahoo = $factory->createLink("Yahoo!", "http://www.yahoo.com/");

/** @var Link $jp_yahoo */
$jp_yahoo = $factory->createLink("Yahoo!Japan", "http://yahoo.co.jp");

/** @var Link $excite */
$excite = $factory->createLink("Excite", "http://www.excite.com");

/** @var Link $google */
$google = $factory->createLink("Google", "http://www.google.com");

/** @var Tray $tray_news */
$tray_news = $factory->createTray("新聞");
$tray_news->add($asahi);
$tray_news->add($yomiuri);

/** @var Tray $tray_yahoo */
$tray_yahoo = $factory->createTray("Yahoo!");
$tray_yahoo->add($us_yahoo);
$tray_yahoo->add($jp_yahoo);

/** @var Tray $tray_search */
$tray_search = $factory->createTray("サーチエンジン");
$tray_search->add($tray_yahoo);
$tray_search->add($excite);
$tray_search->add($google);

/** @var Page $page */
$page = $factory->createPage("LinkPage", "cocomaru");
$page->add($tray_news);
$page->add($tray_search);
$page->output();