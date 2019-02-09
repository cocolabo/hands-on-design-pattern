<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-09
 * Time: 09:05
 */

namespace App\Builder;


class Director
{
    /** @var Builder $builder*/
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function construct()
    {
        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('朝から昼にかけて');
        $this->builder->makeItems([
            'おはようございます',
            'こんにちは',
        ]);
        $this->builder->makeString('夜に');
        $this->builder->makeItems([
            'こんばんは',
            'おやすみなさい',
            'さようなら',
        ]);
        $this->builder->close();
    }
}