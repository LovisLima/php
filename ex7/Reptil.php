<?php
require_once 'Animal.php';
class Reptil extends animal{
    private $corEscama;

    public function locomover(){
        echo "<p> Rastejando</p> ";
    }

    public function alimentar(){
        echo "<p> comendo vegetais</p>";
    }

    public function emitirSom(){
        echo "<p> som de reptil</p>";
    }

    public function getCorEscama()
    {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }


}