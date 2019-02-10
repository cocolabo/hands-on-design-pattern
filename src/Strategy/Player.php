<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-10
 * Time: 13:26
 */

namespace App\Strategy;


class Player
{
    /** @var string $name */
    private $name;
    /** @var Strategy $strategy */
    private $strategy;
    /** @var int $win_count */
    private $win_count = 0;
    /** @var int $lose_count */
    private $lose_count = 0;
    /** @var int $game_count */
    private $game_count = 0;

    public function __construct(string $name, Strategy $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    public function nextHand(): Hand
    {
        return $this->strategy->nextHand();
    }

    public function win(): void
    {
        $this->strategy->study(true);
        $this->win_count++;
        $this->game_count++;
    }

    public function lose(): void
    {
        $this->strategy->study(false);
        $this->lose_count++;
        $this->game_count++;
    }

    public function even(): void
    {
        $this->game_count++;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function getResult(): string
    {
        return '[' . $this->name . ':' . $this->game_count . ' games, ' . $this->win_count . ' win, ' . $this->lose_count . ' lose]';
    }
}