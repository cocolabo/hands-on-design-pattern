<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:55
 */

namespace App\AbstractMethod;


class TablePage extends Page
{
    public function __construct(string $title, string $author)
    {
        parent::__construct($title, $author);
    }

    public function makeHTML(): string
    {
        /** @var string $buffer */
        $buffer = null;
        $buffer .= '<html><head><title>' . $this->title . '</title></head>' . PHP_EOL;
        $buffer .= '<body>' . PHP_EOL;
        $buffer .= '<h1>' . $this->title . '</h1>' . PHP_EOL;
        $buffer .= '<table border="3">' . PHP_EOL;

        /** @var Item $content */
        foreach ($this->content as $content) {
            $buffer .= '<tr>' . $content->makeHTML() . '</tr>';
        }

        $buffer .= '</table>' . PHP_EOL;

        $buffer .= '<hr><address>' . $this->author . '</address>' . PHP_EOL;
        $buffer .= '</body></html>' . PHP_EOL;

        return $buffer;
    }
}