<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {

    private $matr;
    private $curso;

    public function cancMatric(){
     echo "<p>Matricula será cancelada</p>";
    }

    public function pagarMensalidade(){
     echo "<p> Pagando Mensalidade do aluno $this->nome<";
    }

    public function getMatr(){
        return $this->matr;
    }

     public function setMatr($matr){
        $this->matr = $matr;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

}