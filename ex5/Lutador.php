<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct(){

    }


    /**
 * @return mixed
 */
public function getNome()
{
    return $this->nome;
}/**
 * @param mixed $nome
 */
public function setNome($nome)
{
    $this->nome = $nome;
}/**
 * @return mixed
 */
public function getNacionalidade()
{
    return $this->nacionalidade;
}/**
 * @param mixed $nacionalidade
 */
public function setNacionalidade($nacionalidade)
{
    $this->nacionalidade = $nacionalidade;
}/**
 * @return mixed
 */
public function getIdade()
{
    return $this->idade;
}/**
 * @param mixed $idade
 */
public function setIdade($idade)
{
    $this->idade = $idade;
}/**
 * @return mixed
 */
public function getAltura()
{
    return $this->altura;
}/**
 * @param mixed $altura
 */
public function setAltura($altura)
{
    $this->altura = $altura;
}/**
 * @return mixed
 */
public function getPeso()
{
    return $this->peso;
}/**
 * @param mixed $peso
 */
public function setPeso($peso)
{
    $this->peso = $peso;
}/**
 * @return mixed
 */
public function getCategoria()
{
    return $this->categoria;
}/**
 * @param mixed $categoria
 */
public function setCategoria($categoria)
{
    $this->categoria = $categoria;
}/**
 * @return mixed
 */
public function getVitorias()
{
    return $this->vitorias;
}/**
 * @param mixed $vitorias
 */
public function setVitorias($vitorias)
{
    $this->vitorias = $vitorias;
}/**
 * @return mixed
 */
public function getDerrotas()
{
    return $this->derrotas;
}/**
 * @param mixed $derrotas
 */
public function setDerrotas($derrotas)
{
    $this->derrotas = $derrotas;
}/**
 * @return mixed
 */
public function getEmpates()
{
    return $this->empates;
}/**
 * @param mixed $empates
 */
public function setEmpates($empates)
{
    $this->empates = $empates;
}



}