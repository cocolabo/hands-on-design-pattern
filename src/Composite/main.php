<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 17:56
 */

namespace App\Composite;

require_once "../../vendor/autoload.php";

try {

    echo 'Making root entries...' . PHP_EOL;

    /** @var Directory $root_dir */
    $root_dir = new Directory('root');

    /** @var Directory $bin_dir */
    $bin_dir = new Directory('bin');

    /** @var Directory $tmp_dir */
    $tmp_dir = new Directory('tmp');

    /** @var Directory $usr_dir */
    $usr_dir = new Directory('usr');

    $root_dir->add($bin_dir);
    $root_dir->add($tmp_dir);
    $root_dir->add($usr_dir);

    $bin_dir->add(new File("vi", 10000));
    $bin_dir->add(new File("latex", 20000));

    $root_dir->printList();

    echo PHP_EOL;
    echo 'Making usr entries...' . PHP_EOL;

    /** @var Directory $yuki_dir */
    $yuki_dir = new Directory('yuki');

    /** @var Directory $hanako_dir */
    $hanako_dir = new Directory('hanako');

    /** @var Directory $tomura_dir */
    $tomura_dir = new Directory('tomura');

    $usr_dir->add($yuki_dir);
    $usr_dir->add($hanako_dir);
    $usr_dir->add($tomura_dir);

    $yuki_dir->add(new File("diary.html", 100));
    $yuki_dir->add(new File("Composite.java", 200));
    $hanako_dir->add(new File("memo.txt", 300));
    $tomura_dir->add(new File("game.txt", 400));
    $tomura_dir->add(new File("junk.mail", 500));

    $root_dir->printList();
} catch (FileTreatmentException $e) {
    var_dump($e->getTraceAsString());
}