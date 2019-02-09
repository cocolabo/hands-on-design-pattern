<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:47
 */

namespace App\AbstractMethod;


class TableFactory extends Factory
{
    public function createLink(string $caption, string $url): Link
    {
        return new TableLink($caption, $url);
    }

    public function createTray(string $caption): Tray
    {
        return new TableTray($caption);
    }

    public function createPage(string $title, string $author): Page
    {
        return new TablePage($title, $author);
    }
}