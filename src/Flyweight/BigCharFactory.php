<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 18:28
 */

namespace App\Flyweight;


class BigCharFactory
{
    /** @var array $pool */
    private $pool = [];

    /** @var BigCharFactory $singleton */
    private static $singleton;

    private function __construct()
    {
    }

    public static function getInstance(): BigCharFactory
    {
        if (!self::$singleton) {
            self::$singleton = new self();
        }
        return self::$singleton;
    }

    public function getBigChar(string $char_name): BigChar
    {
        $bc = $this->pool[$char_name] ?? null;

        if (is_null($bc)) {
            $bc = new BigChar($char_name);
            $this->pool[$char_name] = $bc;
        }

        return $bc;
    }
}