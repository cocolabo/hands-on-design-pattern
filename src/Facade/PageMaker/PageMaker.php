<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 21:45
 */

namespace App\Facade\PageMaker;


class PageMaker
{
    private function __construct()
    {
    }

    public static function makeWelcomePage(string $mail_addr, string $file_name): void
    {
        try {
            /** @var string $mail_prop */
            $mail_prop = Database::getProperties('meta_data');

            /** @var string $user_name */
            $user_name = $mail_prop[$mail_addr];

            /** @var HtmlWriter $write */
            $writer = new HtmlWriter(new \SplFileObject($file_name, 'w'));
            $writer->title('Welcome to' . $user_name . "'s page!");
            $writer->paragraph($user_name . 'のページへようこそ。');
            $writer->paragraph('メールまっていますね。');
            $writer->mailto($mail_addr, $user_name);
            $writer->close();

        } catch (\Exception $e) {
            var_dump($e->getTraceAsString());
        }
    }
}