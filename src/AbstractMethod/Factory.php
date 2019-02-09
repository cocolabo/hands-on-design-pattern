<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:05
 */

namespace App\AbstractMethod;


abstract class Factory
{
    public static function getFactory(string $class_name): Factory
    {
        /** @var Factory $factory */
        $factory = null;
        try {
            $factory = new $class_name;
        } catch (\Exception $e) {
            var_dump($e->getTraceAsString());
        }

        return $factory;
    }

    abstract public function createLink(string $caption, string $url): Link;

    abstract public function createTray(string $caption): Tray;

    abstract public function createPage(string $title, string $author): Page;
}