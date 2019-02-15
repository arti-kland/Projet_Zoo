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
        $News = " ";
        foreach ($this->animals as $animal){
            $News .= "Je m'appel : " .$animal->getName() . ", qui dit : " . $animal->noise(). "\n";
        }
        return $News;
    }
}
