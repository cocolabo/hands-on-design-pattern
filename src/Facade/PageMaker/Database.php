<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 22:38
 */

namespace App\Facade\PageMaker;


class Database
{
    private function __construct() // newでインスタンス生成させないためにprivate宣言
    {
    }

    public static function getProperties(string $dbname): ?array
    {
        /** @var string $file_name */
        $file_name = $dbname . '.ini';

        try {
            return parse_ini_file($file_name);
        } catch (\Exception $e) {
            var_dump($e->getTraceAsString());
        }
    }
}