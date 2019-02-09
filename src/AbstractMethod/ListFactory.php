<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:18
 */

namespace App\AbstractMethod;


class ListFactory extends Factory
{
    public function createLink(string $caption, string $url): Link
    {
        return new ListLink($caption, $url);
    }

    public function createTray(string $caption): Tray
    {
        return new ListTray($caption);
    }

    public function createPage(string $title, string $author): Page
    {
        return new ListPage($title, $author);
    }
}