<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

Class Dove extends Animal implements CanFly, CanWalk
{
    protected function getNoise(): string
    {
        return 'Rou Rouuu';
    }
}