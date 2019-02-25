<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 17:17
 */

namespace App\Interpreter;

// BNF
// <command list> ::= <command>* end
class CommandListNode extends Node
{
    /** @var CommandNode[] $list */
    private $list = [];

    public function parse(Context $context): void
    {
        while (true) {
            if ($context->currentToken() == null) {
                throw new ParseException("Missing 'end'");
            } elseif ($context->currentToken() === 'end') {
                $context->skipToken('end');
                break;
            } else {
                /** @var CommandNode $commandNode */
                $commandNode = new CommandNode();
                $commandNode->parse($context);
                $this->list[] = $commandNode;
            }
        }
    }

    public function __toString(): string
    {
        return '[' . join(',', $this->list) . ']';
    }
}