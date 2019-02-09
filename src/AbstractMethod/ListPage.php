<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 19:26
 */

namespace App\AbstractMethod;


class ListPage extends Page
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
        $buffer .= '<ul>' . PHP_EOL;

        /** @var Item $content */
        foreach ($this->content as $content) {
            $buffer .= $content->makeHTML();
        }

        $buffer .= '</ul>' . PHP_EOL;

        $buffer .= '<hr><address>' . $this->author . '</address>' . PHP_EOL;
        $buffer .= '</body></html>' . PHP_EOL;

        return $buffer;
    }
}