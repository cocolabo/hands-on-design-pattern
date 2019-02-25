<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-25
 * Time: 17:19
 */

namespace App\Interpreter;


use function PHPSTORM_META\type;

class Context
{
    /** @var string[] $tokens */
    private $tokens;

    /** @var string $current_token */
    private $current_token;

    public function __construct(string $text)
    {
        $this->tokens = explode(' ', $text);
        $this->nextToken();
    }

    public function nextToken(): ?string
    {
        if (count($this->tokens) > 0) {
            $this->current_token = array_shift($this->tokens);
        } else {
            $this->current_token = null;
        }

        return $this->current_token;
    }

    public function currentToken(): ?string
    {
        return $this->current_token;
    }

    /**
     * @param string $token
     * @throws ParseException
     */
    public function skipToken(string $token): void
    {
        if ($token !== $this->current_token) {
            throw new ParseException('Warning: ' . $token . ' is expected, but ' . $this->current_token . ' is found.');
        }
        $this->nextToken();
    }

    public function currentNumber(): int
    {
        /** @var int $number */
        return (int)$this->current_token;

    }
}