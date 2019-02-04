<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-04
 * Time: 16:34
 */

namespace App\Singleton;


class Singleton
{
    private static $singleton;

    private function __construct()
    {
        echo 'インスタンスを生成しました。' . PHP_EOL;
    }

    public static function getInstance(): Singleton
    {
        return static::$singleton ? static::$singleton : static::$singleton = new static();

    }

}