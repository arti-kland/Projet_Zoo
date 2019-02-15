<?php
require __DIR__ . '/vendor/autoload.php';

use App\Animals\Fish;
use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Whale;
use App\Animals\Zebra;
use App\Animals\Elephant;
use App\Animals\Parrot;
use App\Animals\Dove;
use App\Zoo;

$zoo = new Zoo();

$animals = [
    //poissons
    $Fish = new Fish('bubulle'),
    $Fish = new Fish('bibille'),
    $Fish = new Fish('baballe'),
    $Fish = new Fish('bobolle'),
    $Fish = new Fish('byby'),
    $BublleFish = new BubbleFish('baubau'),
    $BublleFish = new BubbleFish('bubu'),
    $BublleFish = new BubbleFish('bebe'),
    $CatFish = new CatFish('bobo'),
    $CatFish = new CatFish('bibi'),
    $Fish = new ClownFish('baba'),
    //elephants
    $Elephant = new Elephant('Robert'),
    $Elephant = new Elephant('Bebert'),
    //Zebre
    $Zebra = new Zebra('Zorro'),
    //Perroquets
    $Parrot = new Parrot('Cici'),
    $Parrot = new Parrot('Caca'),
    $Parrot = new Parrot('Cucu'),
    $Parrot = new Parrot('Cece'),
    $Parrot = new Parrot('Coko'),
    $Parrot = new Parrot('Ciki'),
    $Parrot = new Parrot('Caka'),
    $Parrot = new Parrot('Cuku'),
    $Parrot = new Parrot('Ceke'),
    $Parrot = new Parrot('Koko'),
    //Colombes
    $Dove = new Dove('Blanche'),
    $Dove = new Dove('Grise'),
    //Baleine
    $Whale = new Whale('La Grosse'),
];

foreach ($animals as $animal)
{
    $zoo->addAnimal($animal);
}

$zoo::visitTheZoo();



