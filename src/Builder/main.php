<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 09:37
 */

namespace App\Builder;

require_once "../../vendor/autoload.php";

if ($argc != 2) {
    usage();
    exit(1);
}

if ($argv[1] === "plain") {
    /** @var TextBuilder $text_builder */
    $text_builder = new TextBuilder();

    /** @var Director $director */
    $director = new Director($text_builder);

    $director->construct();

    /** @var string $result */
    $result = $text_builder->getResult();

    echo $result . PHP_EOL;

} elseif ($argv[1] === "html") {
    /** @var HtmlBuilder $html_builder */
    $html_builder = new HtmlBuilder();

    /** @var Director $director */
    $director = new Director($html_builder);

    $director->construct();

    /** @var string $file_name */
    $file_name = $html_builder->getResult();

    echo $file_name . 'が作成されました' . PHP_EOL;
} else {
    usage();
    exit(1);
}
function usage(): void
{
    echo 'Usage: PHP Main plain プレーンテキストで文書作成' . PHP_EOL;
    echo 'Usage: PHP Main html HTMLテキストで文書作成' . PHP_EOL;
}
