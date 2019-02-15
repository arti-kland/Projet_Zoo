<?php

namespace App;

use App\Interfaces\CanSwim;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;


class Zoo
{
    private static  $aquarium = null;
    private static  $aviary = null;
    private static  $fence = null;


    public static function getAquarium()
    {
        return self::$aquarium;
    }

    public static function getAviary()
    {
        return self::$aviary;
    }

    public static function setFence($fence)
    {
        self::$fence = $fence;
    }
    static public function addAnimal(Animal $animal)
    {
        if ($animal instanceof CanFly )
        {
            if (self::$aviary === null){
            self::$aviary = new Enclosure();
            }self::$aviary->addAnimal($animal);
        }elseif ($animal instanceof CanWalk)
        {
            if(self::$fence === null){
            self::$fence = new Enclosure();
            }self::$fence->addAnimal($animal);
        }elseif ($animal instanceof CanSwim)
        {
            if(self::$aquarium === null){
            self::$aquarium = new Enclosure();
            }self::$aquarium->addAnimal($animal);
        }
    }
    static function visitTheZoo()
    {
      echo" Dans l'aquarium j'ai : \n" .self::$aquarium;
      echo"\n";
      echo" Dans l'enclos j'ai : \n" . self::$fence;
      echo"\n";
      echo" Dans la volière j'ai : \n" . self::$aviary;
    }
}
