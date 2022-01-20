<?php
require_once 'Animal.php';
class Ave extends Animal{

    private $corPena;

    public function locomover(){
        echo "<p> Voa Voa pequenina! </p> ";
    }

    public function alimentar(){
        echo "<p> Frutas </p>";
    }

    public function emitirSom(){
        echo "<p> gralha aí!</p>";
    }

    public function fazerNinho(){
        echo "<p> fazendo ninho </p>";
    }

    public function getCorPena()
    {
        return $this->corPena;
    }

    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }



}