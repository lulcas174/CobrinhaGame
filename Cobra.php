<?php
class Cobra{
    public $cabeca;
    public $morte;
    public $tamanho;
    public $cauda; // o motivo de ter cauda e tamanho é porque a cauda vai receber a função de morte, afinal, ela só morre quando a cabeça encontra a cauda
    private $posicaoCobra;
    public function cobraMovimento(){

    }
    

    public function getCabeca()
    {
    return $this->cabeca;
    }
    public function setCabeca($cabeca)
    {
    $this->cabeca = $cabeca;
    return $this;
    }
    public function getMorte()
    {
    return $this->morte;
    }

    public function setMorte($morte)
    {
    $this->morte = $morte;
    return $this;
    }

    public function getTamanho()
    {
    return $this->tamanho;
    }

    public function setTamanho($tamanho)
    {
    $this->tamanho = $tamanho;
    return $this;
    }
    public function getCauda()
    {
    return $this->cauda;
    }

    public function setCauda($cauda)
    {
    $this->cauda = $cauda;
    return $this;
    }

    public function getPosicaoCobra()
    {
    return $this->posicaoCobra;
    }

    public function setPosicaoCobra($posicaoCobra)
    {
    $this->posicaoCobra = $posicaoCobra;
    return $this;
    }
    }
?>