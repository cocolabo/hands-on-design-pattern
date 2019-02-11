<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-11
 * Time: 14:47
 */

namespace App\Visitor;


abstract Class Visitor
{
    abstract public function visit(Entry $entry): void;
    abstract protected function visitFile(File $file): void;
    abstract protected function visitDirectory(Directory $directory): void;
}