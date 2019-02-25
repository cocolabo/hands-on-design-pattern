<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 15:20
 */

namespace App\Proxy;


class Printer implements Printable
{
    /** @var string $name */
    private $name;

//    public function __construct()
//    {
//        $this->heavyJob('Printerのインスタンスを生成中');
//    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setPrinterName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrinterName(): string
    {
        return $this->name;
    }

    public function print(string $string): void
    {
        echo '=====' . $this->name . '====' . PHP_EOL;
        echo $string . PHP_EOL;
    }

    private function heavyJob(string $msg): void
    {
        echo $msg . PHP_EOL;

        sleep(5);

        echo '完了。' . PHP_EOL;
    }


}