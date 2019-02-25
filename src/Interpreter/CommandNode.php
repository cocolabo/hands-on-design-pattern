<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 17:25
 */

namespace App\Interpreter;

// BNF
// <command> ::= <repeat command> | <primitive command>
class CommandNode extends Node
{
    /** @var Node $node */
    private $node;

    public function parse(Context $context): void
    {
        if($context->currentToken() === 'repeat') {
            $this->node = new RepeatCommandNode();
            $this->node->parse($context);
        } else {
            $this->node = new PrimitiveCommandNode();
            $this->node->parse($context);
        }
    }

    public function __toString(): string
    {
        return $this->node;
    }
}