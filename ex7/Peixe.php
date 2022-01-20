<?php
require_once 'Animal.php';
class Peixe extends Animal{

    private $corPeixe;

    public function locomover(){
        echo "<p> Nadando </p> ";
    }

    public function alimentar(){
        echo "<p> comendo substâncias</p>";
    }

    public function emitirSom(){
        echo "<p> glub glub</p>";
    }
     public function soltarBolha(){
         echo "<p> soltou uma bolha </p>";
    }

    public function getCorPeixe(){
        return $this->corPeixe;
    }

    public function setCorPeixe($corPeixe){
        $this->corPeixe = $corPeixe;
    }



}