<?php
require_once 'Pessoa.php';
class Professor extends  Pessoa{
     private $Especialidade;
     private $Salario;

     public Function receberAumento($aum){
        $this->salario += $aum;
     }

    public function getEspecialidade(){
        return $this->Especialidade;
    }
    public function setEspecialidade($Especialidade){
        $this->Especialidade = $Especialidade;
    }
    public function getSalario(){
        return $this->Salario;
    }

    public function setSalario($Salario){
        $this->Salario = $Salario;
    }


}