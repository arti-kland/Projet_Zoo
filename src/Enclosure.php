<?php

namespace App;

class Enclosure
{
    private $animals = [];

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;         //met animal dans le tableau animals !!
    }

    public function __toString(): string
    {
        $News = "Je suis :";
        foreach ($this->animals as $animal) {
            $News .= $animal->getName() . " : " . $animal->noise();
        }
        return $News;
    }
}
