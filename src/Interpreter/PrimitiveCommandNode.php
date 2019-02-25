<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 17:31
 */

namespace App\Interpreter;

// BNF
// <primitive command> ::= go | right | left
class PrimitiveCommandNode extends Node
{
    /** @var string $name */
    private $name;

    public function parse(Context $context): void
    {
        $this->name = $context->currentToken();
        $context->skipToken($this->name);

        if ($this->name !== 'go' && $this->name !== 'right' && $this->name !== 'left') {
            throw new ParseException($this->name . ' is undefined.');
        }
    }

    public function __toString(): string
    {
        return $this->name;
    }
}