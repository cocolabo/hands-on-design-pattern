<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-24
 * Time: 18:20
 */

namespace App\Flyweight;


class BigChar
{
    /** @var string $char_name */
    private $char_name;

    /** @var string $font_data */
    private $font_data;

    public function __construct(string $char_name)
    {
        $this->char_name = $char_name;

        $data = file_get_contents('big' . $char_name . '.txt');
        if (is_null($data)) {
            $this->font_data = $char_name . '?';
        } else {
            $this->font_data = $data;
        }
    }

    public function print(): void
    {
        echo $this->font_data;
    }
}