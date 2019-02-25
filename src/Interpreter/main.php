<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 17:44
 */

namespace App\Interpreter;

require_once '../../vendor/autoload.php';


$texts = [
    'program end',
    'program go end',
    'program go right go right go right end',
    'program repeat 4 go right end end',

];

foreach ($texts as $text) {
    echo '====================================' . PHP_EOL;
    echo 'text = ' . $text . PHP_EOL;

    try {
        $node = new ProgramNode();
        $node->parse(new Context($text));
        echo 'node = ' . $node . PHP_EOL;
    } catch (ParseException $e) {
        var_dump($e->getMessage(), $e->getTraceAsString());
    }
}