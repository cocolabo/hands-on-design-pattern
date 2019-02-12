<?php
/**
 * Created by PhpStorm.
 * User: cocomaru
 * Date: 2019-02-12
 * Time: 22:11
 */

namespace App\Mediator;


class Aircraft
{
    private $control_tower;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setControlTower(ControlTower $controlTower)
    {
        $this->control_tower = $controlTower;
    }
    /**
     * 着陸申請
     */
    public function applyForLanding()
    {
        $this->control_tower->applyForLanding($this->name);
    }
}