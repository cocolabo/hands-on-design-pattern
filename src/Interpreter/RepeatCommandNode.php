<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 17:28
 */

namespace App\Interpreter;

// BNF
// <repeat command> ::= repeat <number> <command list>
class RepeatCommandNode extends Node
{
    /** @var int $number */
    private $number;

    /** @var Node $commandListNode */
    private $commandListNode;

    public function parse(Context $context): void
    {
        $context->skipToken('repeat');
        $this->number = $context->currentNumber();
        $context->nextToken();
        $this->commandListNode = new CommandListNode();
        $this->commandListNode->parse($context);
    }

    public function __toString(): string
    {
        return '[repeat ' . $this->number . ' ' . $this->commandListNode . ']';
    }
}