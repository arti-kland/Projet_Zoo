<?php
require __DIR__ . '/vendor/autoload.php';

use App\Animals\Fish;

    $fish = new Fish('bubulle');

    echo $fish->noise();