<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 17:13
 */

namespace App\AbstractMethod;


abstract class Page
{
    /** @var string $title */
    protected $title;

    /** @var string $author */
    protected $author;

    /** @var array $content */
    protected $content = [];

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function add(Item $item)
    {
        $this->content[] = $item;
    }

    public function output()
    {
        try {
            /** @var string $filename */
            $filename = $this->title . '.html';

            /** @var \SplFileObject $writer */
            $writer = new \SplFileObject($filename, 'w');

            $writer->fwrite($this->makeHTML());

            $writer = null;

            echo $filename . 'を作成しました。' . PHP_EOL;

        } catch (\RuntimeException $e) {
            var_dump($e->getTraceAsString());
        }
    }

    abstract public function makeHTML(): string;
}