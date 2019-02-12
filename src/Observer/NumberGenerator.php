<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 22:18
 */

namespace App\Observer;


abstract class NumberGenerator
{
    /** @var Observer[] $observers */
    private $observers = [];

    public function addObserver(Observer $observer): void
    {
        $key = spl_object_hash($observer);
        $this->observers[$key] = $observer;
    }

    public function deleteObserver(Observer $observer): void
    {
        $key = spl_object_hash($observer);
        unset($this->observers[$key]);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    abstract public function getNumber(): int;

    abstract public function execute(): void;
}