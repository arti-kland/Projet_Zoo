<?php

namespace App;

abstract class Animal{

    private $name;

    public function __construct($name){
        $this->name=$name;
    }

    public function __getName(){
        return $this->name;
    }

    protected abstract function getNoise(): string;

    public function noise(): string{
       return$this->getNoise();
    }
}