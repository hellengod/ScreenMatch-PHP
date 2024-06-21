<?php
namespace ScreenMatch\Modelo;

trait ComAvaliacao{
    private array $notas = [];

    
    function avalia(float $nota):void{
        $this->notas[]= $nota;
    }

    function media():float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }
}