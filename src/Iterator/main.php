<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-02
 * Time: 22:54
 */

namespace App\Iterator;

require_once "../../vendor/autoload.php";

$bookShelf = new BookShelf();

$bookShelf->appendBook(new Book('Around ths World in 80 Days'));
$bookShelf->appendBook(new Book('Bible'));
$bookShelf->appendBook(new Book('Cinderella'));
$bookShelf->appendBook(new Book('Daddy-Long-Legs'));

$it = $bookShelf->iterator();

while ($it->hasNext()) {
    $book = $it->next();
    echo $book->getName() . PHP_EOL;
}
