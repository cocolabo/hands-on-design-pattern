<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 17:14
 */

namespace App\Interpreter;

// BNF
// <program> ::= program <command list>
class ProgramNode extends Node
{
    /** @var Node $commandListNode */
    private $commandListNode;

    public function parse(Context $context): void
    {
        $context->skipToken('program');
        $this->commandListNode = new CommandListNode();
        $this->commandListNode->parse($context);
    }

    public function __toString(): string
    {
        return '[program ' . $this->commandListNode . ']';
    }
}