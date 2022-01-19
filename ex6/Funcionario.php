<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa {

    private $Setor;
    private $Trabalhando;

    public function mudarTrabalho(){
        $this->trabalhando =! $this->trabalhando;
    }

    public function getSetor(){
        return $this->Setor;
    }

    public function setSetor($Setor){
        $this->Setor = $Setor;
    }
    public function getTrabalhando(){
        return $this->Trabalhando;
    }
    public function setTrabalhando($Trabalhando){
        $this->Trabalhando = $Trabalhando;
    }

}