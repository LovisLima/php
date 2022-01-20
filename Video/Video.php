<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproducao;

    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproducao = false;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao){

        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
    }

    public function getViews(){
        return $this->views;
    }

    public function setViews($views){
        $this->views = $views;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }

    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }

    public function getReproducao(){
        return $this->reproducao;
    }

    public function setReproducao($reproducao){
        $this->reproducao = $reproducao;
    }





    public function play(){
        $this->reproducao = true;

    }

    public function pause(){
        $this->reproducao = true;
    }

    public function like(){
        $this-> curtidas ++;
    }
}