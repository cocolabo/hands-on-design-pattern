<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 17:10
 */

namespace App\Interpreter;


abstract class Node
{
    /**
     * @param Context $context
     * @throws ParseException
     * @return mixed
     */
    public abstract function parse(Context $context): void;
}