<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 22:46
 */

namespace App\Facade\PageMaker;


class HtmlWriter
{
    /** @var \SplFileObject $writer */
    private $writer;

    public function __construct(\SplFileObject $writer)
    {
        $this->writer = $writer;
    }

    public function title(string $title): void
    {
        $this->writer->fwrite('<html>');
        $this->writer->fwrite('<head>');
        $this->writer->fwrite('<title>' . $title . '</title>');
        $this->writer->fwrite('</head>');
        $this->writer->fwrite('<body>');
        $this->writer->fwrite('<h1>' . $title . '</h1>');
    }

    public function paragraph(string $msg): void
    {
        $this->writer->fwrite('<p>' . $msg . '</p>');
    }

    public function link(string $href, string $caption): void
    {
        $this->paragraph('<a href="' . $href . '">' . $caption . '</a>');
    }

    public function mailto(string $mail_addr, string $user_name): void
    {
        $this->link("mailto:" . $mail_addr, $user_name);
    }

    public function close(): void
    {
        $this->writer->fwrite('</body>');
        $this->writer->fwrite('</html>');
    }

}