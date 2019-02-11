<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 15:04
 */

namespace App\Visitor;


class ListVisitor extends Visitor
{
    /** @var string $current_directory */
    private $current_directory = "";

    public function visit(Entry $entry): void
    {
        if ($entry instanceof File) {
            $this->visitFile($entry);
        } elseif ($entry instanceof Directory) {
            $this->visitDirectory($entry);
        }
    }

    protected function visitFile(File $file): void
    {
        echo $this->current_directory . '/' . $file . PHP_EOL;
    }

    protected function visitDirectory(Directory $directory): void
    {
        echo $this->current_directory . '/' . $directory . PHP_EOL;

        /** @var string $save_directory */
        $save_directory = $this->current_directory;

        $this->current_directory .= '/' . $directory->getName();

        /** @var Entry $entry */
        foreach($directory->getAll() as $entry) {
            $entry->accept($this);
        }

        $this->current_directory = $save_directory;
    }
}