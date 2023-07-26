<?php

abstract class Animal{ 
    public $nom;

    public function __construct($nom){
        $this->nom=$nom;
    }

    abstract public function makeSound();

    public function mensaje(){
        return $this->nom." dice: ";
    }
}

class Gat extends Animal{

    public function __construct($nom){
        $this->nom=$nom;
    }

    function makeSound(){
        return "meaaaawww!!!";
    }
}

class Gos extends Animal{

    public function __construct($nom){
        $this->nom=$nom;
    }

    function makeSound(){
        return "Guau guau!!!";
    }
}

$gat=new Gat("Misino");
echo $gat->mensaje().$gat->makeSound();

echo "<br>";

$gos=new Gos ("Perrete");
echo $gos->mensaje().$gos->makeSound();



?>