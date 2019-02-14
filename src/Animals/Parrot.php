<?php

namespace App\Animals;

use App\Animal;

Class Parrot extends Animal
{
    protected function getNoise(): string
    {
        return 'coco';
    }
}