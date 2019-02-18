<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-18
 * Time: 14:10
 */

namespace App\Memento;


class Gamer
{
    /** @var int $money */
    private $money = 0;

    /** @var array $fruits */
    private $fruits = [];

    /** @var string[] $fruit_name */
    private static $fruit_name = [
        "りんご", "ぶどう", "バナナ", "みかん"
    ];

    public function __construct(int $money)
    {
        $this->money = $money;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    public function bet(): void
    {
        /** @var int $dice */
        $dice = random_int(1, 6);

        if ($dice === 1) {
            $this->money += 100;
            echo '所持金が増えました。' . PHP_EOL;
        } else if ($dice === 2) {
            $this->money /= 2;
            echo '所持金が半分に減りました。' . PHP_EOL;
        } else if ($dice === 6) {
            $f = $this->getFruit();
            echo 'フルーツ（' . $f . '）をもらいました。' . PHP_EOL;
            $this->fruits[] = $f;
        } else {
            echo '何も起こりませんでした。' . PHP_EOL;
        }
    }

    // スナップショットをとる
    public function createMemento(): Memento
    {
        /** @var Memento $m */
        $m = new Memento($this->money);

        foreach ($this->fruits as $fruit) {
            // 美味しいものだけ保存
            if (strstr($fruit, 'おいしい') !== false) {
                $m->addFruit($fruit);
            }
        }

        return $m;
    }

    // undoを行う
    public function restoreMemento(Memento $memento): void
    {
        $this->money = $memento->getMoney();

        $this->fruits = $memento->getFruits();
    }

    public function __toString(): string
    {
        return '[money = ' . $this->money . ', fruits = ' . json_encode($this->fruits, JSON_UNESCAPED_UNICODE) . ']';
    }

    private function getFruit(): string
    {
        $prefix = '';
        if (random_int(0, 1) === 1) {
            $prefix = 'おいしい';
        }

        $fruit_length = count(self::$fruit_name) - 1;

        return $prefix . self::$fruit_name[random_int(0, $fruit_length)];
    }
}