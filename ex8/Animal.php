<?php

abstract class Animal{
    protected $peso;
    protected $Idade;
    protected $membros;

    abstract function emitirSom();


    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getIdade(){
        return $this->Idade;
    }

    public function setIdade($Idade){
        $this->Idade = $Idade;
    }

    public function getMembros(){
        return $this->membros;
    }

    public function setMembros($membros){
        $this->membros = $membros;
    }


}