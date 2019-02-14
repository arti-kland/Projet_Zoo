<?php

namespace App\Animals;

use App\Animal;

Class Dove extends Animal
{
    protected function getNoise(): string
    {
        return 'Rou Rouuu';
    }
}