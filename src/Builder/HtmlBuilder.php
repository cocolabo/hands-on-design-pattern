<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 09:07
 */

namespace App\Builder;


class HtmlBuilder extends Builder
{
    /** @var string $filename */
    private $filename;

    /** @var \SplFileObject $writer */
    private $writer;


    public function makeTitle(string $title): void
    {
        $this->filename = $title . '.html';

        try {
            $this->writer = new \SplFileObject($this->filename, 'w');
        } catch (\RuntimeException  $e) {
            var_dump($e->getTraceAsString());
        }

        $this->writer->fwrite('<html><head><title>' . $title . '</title></head><body>');
        $this->writer->fwrite('<h1>' . $title . '</h1>');
    }

    public function makeString(string $str): void
    {
        $this->writer->fwrite('<p>' . $str . '</p>');
    }

    public function makeItems(array $items): void
    {
        $this->writer->fwrite('<ul>');
        foreach ($items as $item) {
            $this->writer->fwrite('<li>' . $item . '</li>');
        }
        $this->writer->fwrite('</ul>');
    }

    public function close(): void
    {
        $this->writer->fwrite('</body></html>');
        $this->writer = null;
    }

    public function getResult()
    {
        return $this->filename;
    }
}