<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    private $corPelo;

    public function locomover(){
        echo "<p> correndo</p> ";
    }

    public function alimentar(){
        echo "<p> mamando</p>";
    }

    public function emitirSom(){
        echo "<p> som de mamifero</p>";
    }

    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }




}